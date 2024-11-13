<?php

#include <bits/stdc++.h>

using namespace std;

string ltrim(const string &);
string rtrim(const string &);

/*
 * Complete the 'minimumNumber' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. STRING password
 */

int minimumNumber(int n, string password) {
    string numbers = "0123456789";
    string lower_case = "abcdefghijklmnopqrstuvwxyz";
    string upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    string special_characters = "!@#$%^&*()-+";
    
    bool has_digit = false;
    bool has_lower = false;
    bool has_upper = false;
    bool has_special = false;

    for (char c : password) {
        if (isdigit(c)) has_digit = true;
        else if (islower(c)) has_lower = true;
        else if (isupper(c)) has_upper = true;
        else if (special_characters.find(c) != string::npos) has_special = true;
    }

    int missing_types = 0;
    if (!has_digit) missing_types++;
    if (!has_lower) missing_types++;
    if (!has_upper) missing_types++;
    if (!has_special) missing_types++;

    int characters_needed = max(missing_types, 6 - n);
    
    return characters_needed;
}

int main()
{
    ofstream fout(getenv("OUTPUT_PATH"));

    string n_temp;
    getline(cin, n_temp);

    int n = stoi(ltrim(rtrim(n_temp)));

    string password;
    getline(cin, password);

    int answer = minimumNumber(n, password);

    fout << answer << "\n";

    fout.close();

    return 0;
}

string ltrim(const string &str) {
    string s(str);

    s.erase(
        s.begin(),
        find_if(s.begin(), s.end(), not1(ptr_fun<int, int>(isspace)))
    );

    return s;
}

string rtrim(const string &str) {
    string s(str);

    s.erase(
        find_if(s.rbegin(), s.rend(), not1(ptr_fun<int, int>(isspace))).base(),
        s.end()
    );

    return s;
}

?>