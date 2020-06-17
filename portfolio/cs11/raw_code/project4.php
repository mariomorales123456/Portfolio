<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
//Mario Morales
//Project 4
//3/16/19
//CS11

#include <iostream>
#include <iomanip>
#include <cmath>
#include <String>

using namespace std;

int main() {
	string fname = string();
	string lname = string();
	int a = int();
	int b = int();
	int c = int();
	double x1 = double();
	double x2 = double();
	double temp1 = double();
	double temp2 = double();
	double temp3 = double();
	double temp4 = double();

	cout << "Enter your first name ";
	cin >> fname;
	cout << endl;
	cout << "Enter your last name ";
	cin >> lname;
	cout << endl;
	cout << "Enter integer a ";
	cin >> a;
	cout << endl;
	cout << "Enter integer b ";
	cin >> b;
	cout << endl;
	cout << "Enter integer c ";
	cin >> c;
	cout << endl;

	temp1 = -1 * b;
	temp2 = (pow(b, 2)) - (4 * a * c);

	cout << scientific << setprecision(4);

	if (temp2 > 0) {
		temp3 = sqrt(temp2);
		temp4 = 2 * a;


		x1 = (temp1 - temp3) / temp4;
		x2 = (temp1 + temp3) / temp4;

		cout << fname << " " << lname << " --" << endl;
		cout << endl;
		cout << "This program will provide solutions for an equation of the form" << endl;
		cout << "\t\t\t A*x^2 + B*x + C = 0" << endl;
		cout << "where A, B and C are integers, and A is not equal to zero." << endl;
		cout << endl;
		cout << "A, B and C : " << a << " " << b << " " << c << endl;
		if (a == 0) {
			cout << endl;
			cout << "No solutions will be calculated for a leading coefficiennt of 0! " << endl;
			cout << endl;
		}
		else {
			cout << "The two real solutions are \t x = " << x2 << endl;
			cout << "\t\t       and \t x = " << x1 << endl;
		}
	}
	else if (temp2 == 0){
		temp3 = sqrt(temp2);
		temp4 = 2 * a;


		x1 = (temp1 - temp3) / temp4;
		x2 = (temp1 + temp3) / temp4;

		cout << fname << " " << lname << " --" << endl;
		cout << endl;
		cout << "This program will provide solutions for an equation of the form" << endl;
		cout << "\t\t\t A*x^2 + B*x + C = 0" << endl;
		cout << "where A, B and C are integers, and A is not equal to zero." << endl;
		cout << endl;
		cout << "A, B and C : " << a << " " << b << " " << c << endl;
		if (a == 0) {
			cout << endl;
			cout << "No solutions will be calculated for a leading coefficiennt of 0! " << endl;
			cout << endl;
		}
		else {
			cout << "The one real solution is \t x = " << x2 << endl;
		}
	}

	else {
		temp3 = sqrt(-1 * temp2);
		temp4 = 2 * a;

		x1 = temp1 / temp4;
		x2 = temp3 / temp4;

		cout << fname << " " << lname << " --" << endl;
		cout << endl;
		cout << "This program will provide solutions for an equation of the form" << endl;
		cout << "\t\t\t A*x^2 + B*x + C = 0" << endl;
		cout << "where A, B and C are integers, and A is not equal to zero." << endl;
		cout << endl;
		cout << "A, B and C : " << a << " " << b << " " << c << endl;
		if (a == 0) {
			cout << endl;
			cout << "No solutions will be calculated for a leading coefficiennt of 0! " << endl;
			cout << endl;
		}
		else {
			cout << "The two imaginary solutions are \t x = " << x1 << " + " << x2 << "*I" << endl;
			cout << "\t\t\t    and \t x = " << x1 << " - " << x2 << "*I" << endl;
		}
	}

	system("pause");
	return 0;
}
</pre>
</div>