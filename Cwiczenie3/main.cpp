#include <iostream>
#include <string>
#include <cctype>
#include <algorithm>

int main()
{
    using namespace std;
    string s;
    cout << "Podaj tekst:" << endl;
    getline(cin, s);

    const int array_size = 'z' - 'a' + 1; // 26
    int array[array_size]{};

    for (int i = 0; i < s.size(); ++i)
    {
        if (isalpha(s[i])) // czy jest a-z
        {
            array[tolower(s[i]) - 'a']++; // zamiana na mala litere za pomoca std::tolower z cctype
        }
    }

    for (int i = 0; i < array_size; ++i)
    {
        if (array[i] != 0)
        {
            cout << char(i + 'a') << ": " << array[i] << "\n";

        }
    }

}
