#include <bits/stdc++.h>
using namespace std;
vector<int> encoding(string s1)
{

	unordered_map<string, int> table;
	for (int i = 0; i <= 255; i++) {
		string ch = "";
		ch += char(i);
		table[ch] = i;
	}

	string p = "", c = "";
	p += s1[0];
	int code = 256;
	vector<int> output_code;
	cout << "Rozszerzenie slownika\n";
	for (int i = 0; i < s1.length()-1; i++) {
		if (i != s1.length() - 1)
			c += s1[i + 1];
		if (table.find(p + c) != table.end()) {
			p = p + c;
		}
		else {
			cout << p + c << " " << code << endl;
			output_code.push_back(table[p]);
			table[p + c] = code;
			code++;
			p = c;
		}
		c = "";
	}

	output_code.push_back(table[p]);
	return output_code;
}


int main()
{
    int wk;
    cout << "Podaj tekst, ktory chcesz zakodowac: " << endl;
    int tab[26][3], licz, tmp[100], tmp2[100], kod[26];
    string line;
    getline(cin, line);



    double dlugosc;
    dlugosc = line.length();



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
    int licznik = 0;
        for (int i = 0; i < 26; i++)
    {
        if (tab[i][1] != 0){
            licznik++;
        }
    };
    int tab2[licznik];
    for (int i = 0; i < 26; i++)
    {
        if (tab[i][1] != 0){
            tab2[i]=char(tab[i][0]);



       }
    }
    cout << "Podstawa slownikowa"<<endl;
    sort(tab2, tab2 + licznik);
    for (int i = 0; i < licznik; i++)
    {
        cout<<char(tab2[i])<<" "<<i+1<<endl;
    }
    cout<<endl;

	vector<int> output_code = encoding(line);


}
