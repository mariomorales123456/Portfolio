<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
#include <iostream>
#include <fstream>
#include <string>
#include <iomanip>
#include <cmath>

using namespace std;
int main() {
	int id = int();
	string fname = string();
	string lname = string();
	string city = string();
	double rate = double();
	double hours = double();
	double gross = double();

	ifstream in;
	in.open("input.txt");

	cout << fixed << setprecision(2);
	cout << setfill('.');

	//for (int i = 0; i <= 2; i++)
	while (!in.eof()) {
		in >> id;
		while (in.fail()) {
			in.clear();
			in.ignore(1, '\n');
			in >> id;
		}
		in >> fname;
		while (in.fail()) {
			in.clear();
			in.ignore(1, '\n');
			in >> fname;
		}
		in >> lname;
		while (in.fail()) {
			in.clear();
			in.ignore(1, '\n');
			in >> lname;
		}

		in >> rate;
		while (in.fail()) {
			in.clear();
			in.ignore(1, '\n');
			in >> rate;
		}
		in >> hours;
		while (in.fail()) {
			in.clear();
			in.ignore(1, '\n');
			in >> hours;
		}

		gross = rate * hours;
		cout << setw(8) << left << id << " " << setw(15) << left << fname << " " << setw(15) << left << lname << " " 
			<< setw(10) << right << rate << " " << setw(10) << right << hours << " " << setw(10) << right << gross << endl;
	}



	system("pause");
	return 0;
}
</pre>
</div>