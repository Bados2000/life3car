#include <iostream>
#include <string>
#include <cctype>
#include <algorithm>
using namespace std;
int main() {
    cout << "Podaj tekst, ktory chcesz zakodowac: " << endl;
    int tab[26][3], licz, tmp[100], tmp2[100], kod[26];
    string line;
    getline(cin, line);
    cout << "Ilosci wystapien znakow" << endl;
    double dlugosc;
    dlugosc = line.length();
    cout << "Wszystkich znakow: " << line.length() << endl;
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
            cout << char(tab[i][0]) << " - " << int(tab[i][1])/dlugosc << endl;
    }
    cout<<endl;
    double zero = 0;
    for (int i = 0; i < 26; i++)
    {
        if (tab[i][1] != 0)
            cout << zero << " ; " << zero+double(tab[i][1])/dlugosc << endl;
            zero+=double(tab[i][1])/dlugosc;
    }
}
