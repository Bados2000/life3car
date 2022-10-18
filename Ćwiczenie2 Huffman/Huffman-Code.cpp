#include <iostream>
#include <string>
#include <vector>
#include <map>
#include <queue>
#include <algorithm>

using namespace std;

struct TreeNode {
    TreeNode* left;
    TreeNode* right;
    char znak;
    int value;
    TreeNode(char c, int v, TreeNode* l = nullptr, TreeNode* r = nullptr) {
        left = l;
        right = r;
        znak = c;
        value = v;
    }
    ~TreeNode() {
        delete right;
        delete left;
    }
    bool isLeaf() {
        return znak != '\0';
    }
};

struct comparator {
    bool operator() (TreeNode* a, TreeNode* b) {
        if (a->value != b->value)
            return a->value > b->value;
        if (!a->isLeaf() && b->isLeaf())
            return false;
        if (!b->isLeaf() && a->isLeaf())
            return true;
        if (a->isLeaf() && b->isLeaf())
            return a->znak > b->znak;
        return true;
    }
};

TreeNode* createTree(string line) {
    map<char, int> licznik;
    for (char c : line) {
        if (licznik.find(c) == licznik.end()) {
            licznik[c] = 1;
        }
        else {
            licznik[c]++;
        }
    }

    priority_queue<TreeNode*, vector<TreeNode*>, comparator> nodes;

    for (auto entry : licznik) {
        nodes.push(new TreeNode(entry.first, entry.second));
    }
    TreeNode* root = nullptr;
    while (nodes.size() > 1) {
        TreeNode* n1 = nodes.top();
        nodes.pop();
        TreeNode* n2 = nodes.top();
        nodes.pop();
        if (n1->value == n2->value && !n1->isLeaf()) {
            TreeNode* pom = n1;
            n1 = n2;
            n2 = pom;
        }
        root = new TreeNode('\0', n1->value + n2->value, n1, n2);
        nodes.push(root);
    }
    return root;
}

void encodeNodes(TreeNode* node, string value, map<char, string>* map) {
    if (node == nullptr) {
        return;
    }
    if (node->isLeaf()) {
        cout << node->znak << " : " + value << endl;
        map->insert({ node->znak, value });
    }
    encodeNodes(node->left, value + '0', map);
    encodeNodes(node->right, value + '1', map);
}

string decode(TreeNode* root, string encoded) {
    string decoded = "";
    TreeNode* currentNode = root;
    for (char c : encoded) {
        if (c == '0') {
            if (currentNode->left->isLeaf()) {
                decoded += currentNode->left->znak;
                currentNode = root;
            }
            else {
                currentNode = currentNode->left;
            }

        }
        else {
            if (currentNode->right->isLeaf()) {
                decoded += currentNode->right->znak;
                currentNode = root;
            }
            else {
                currentNode = currentNode->right;
            }

        }
        return decoded;

    }
}

int main() {
    cout << "Kodowanie Huffmana." << endl;
    cout << "Podaj tekst, ktory chcesz zakodowac: " << endl;
    string line;
    getline(cin, line);

    TreeNode* root = createTree(line);
    cout << endl;
    cout << "Tablica kodowania Huffmana:" << endl;
    map<char, string> encodedValues;
    encodeNodes(root, "", &encodedValues);

    string encodedLine = "";
    for (char c : line) {
        encodedLine += encodedValues[c];
    }
    cout << "Tekst po zakodowaniu: " << encodedLine << endl;

    cout << "Tekst po odkodowaniu: " << decode(root, encodedLine) << endl;

    delete root;
    return 0;
}
