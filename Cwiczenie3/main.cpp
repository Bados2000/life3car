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


int main() {
    cout << "Kodowanie Shannona Fano." << endl;
    cout << "Podaj wiadomoœc do zakodowania: " << endl;
    int tab[26][3], licz, tmp[100], tmp2[100], kod[26];
    string line;
    getline(cin, line);

    cout << "Czestotliwosc wystapien znakow w kodzie ASCII:" << endl;
    for (int i = 0; i < 26; i++)
    {
        tab[i][0] = NULL;
        tab[i][1] = NULL;
        tab[i][2] = NULL;
    }

    for (int i = 0; i < 100; i++)
    {
        tmp[i] = 0;
        tmp2[i] = 0;
    }

    for (int i = 0; i < line.length(); i++)
    {
        tmp[i] = (int)line.at(i);
        tmp2[i] = (int)line.at(i);

    }

    int miejsce = 0;
    for (int i = 0; i < line.length(); i++)
    {
        licz = 0;
        for (int j = 0; j < line.length(); j++)
        {
            if (tmp[i] == tmp2[j])
            {
                tmp2[j] = 0;
                licz++;
            }
        }
        if (licz != 0)
        {
            tab[miejsce][0] = tmp[i];
            tab[miejsce][1] = licz;
            miejsce++;
        }


    }
    for (int i = 0; i < 26; i++)
    {
        if (tab[i][1] != 0)
            cout << tab[i][0] << " - " << tab[i][1] << endl;
    }

    cout << "Znaki po posortowaniu:" << endl;

    for (int i = 0; i < 25; i++)
    {
        for (int j = i + 1; j < 26; j++)
        {
            if (tab[i][1] < tab[j][1])
            {
                int temp = tab[i][0];
                int temp1 = tab[i][1];

                tab[i][1] = tab[j][1];
                tab[i][0] = tab[j][0];
                tab[j][0] = temp;
                tab[j][1] = temp1;

            }
        }

    }

    for (int i = 0; i < 26; i++)
        if (tab[i][1] != 0)
            cout << (char)tab[i][0] << " - " << tab[i][1] << endl;

    TreeNode* root = createTree(line);

    cout << endl;
    cout << "Tablica kodów:" << endl;
    map<char, string> encodedValues;
    encodeNodes(root, "", &encodedValues);

    string encodedLine = "";
    for (char c : line) {
        encodedLine += encodedValues[c];
    }
    cout << "Zakodowana wiadomoœæ: " << encodedLine << endl;



    delete root;
    return 0;
}
