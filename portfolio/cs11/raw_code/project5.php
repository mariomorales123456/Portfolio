<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
#include <cmath>
#include <iostream>
#include <iomanip>
#include <string>
#include <fstream>

using namespace std;

int main() {

	//// File Declerations

	ifstream in;
	in.open("Exp3.txt");
	ifstream fileIn;
	fileIn.open("Exp3.txt");
	ofstream out;
	out.open("Inventory Report.txt");

	//// Variables

	string name = string();
	int number = int();
	double price = double();
	double itemTotalValue = double();
	double inventoryTotalValue = double();

	//// --------- Console Output ------------

	//Header
	for (int i = 0; i < 75; i++) {
		cout << "*";
	}
	cout << endl;
	cout << "\tInventory Report For Jane Doe International Hardware";
	cout << endl;
	for (int i = 0; i < 75; i++) {
		cout << "*";
	}
	cout << endl;
	cout << endl;
	cout << setw(12) << left << "ITEM" << setw(20) << right << "NUMBER OF UNITS" << setw(20) << right << "UNIT COST ($)" << setw(20) << right << "TOTAL VALUE ($)" << endl;

	for (int i = 0; i < 75; i++) {
		cout << "_";
	}

	cout << endl;
	cout << endl;

	//Number Report
	inventoryTotalValue = 0;
	cout << fixed << setprecision(2);
	while (!in.eof()) {

		in >> name >> number >> price;
		itemTotalValue = number * price;
		inventoryTotalValue += itemTotalValue;

		cout << setw(8) << left << name << setw(20) << right << number << setw(20) << right << price << setw(20) << right << itemTotalValue << endl;
		
	}

	//Footer
	for (int i = 0; i < 75; i++) {
		cout << "_";
	}

	cout << endl;
	cout << setw(23) << left << "Inventory Total ($)" << setw(45) << right << inventoryTotalValue << endl;

	//// --------- File Output ------------

	//Header
	for (int i = 0; i < 75; i++) {
		out << "*";
	}
	out << endl;
	out << "\tInventory Report For Jane Doe International Hardware";
	out << endl;
	for (int i = 0; i < 75; i++) {
		out << "*";
	}
	out << endl;
	out << endl;
	out << setw(12) << left << "ITEM" << setw(20) << right << "NUMBER OF UNITS" << setw(20) << right << "UNIT COST ($)" << setw(20) << right << "TOTAL VALUE ($)" << endl;

	for (int i = 0; i < 75; i++) {
		out << "_";
	}

	out << endl;
	out << endl;

	//Number Report
	inventoryTotalValue = 0;
	out << fixed << setprecision(2);
	while (!fileIn.eof()) {

		fileIn >> name >> number >> price;
		itemTotalValue = number * price;
		inventoryTotalValue += itemTotalValue;

		out << setw(8) << left << name << setw(20) << right << number << setw(20) << right << price << setw(20) << right << itemTotalValue << endl;

	}

	//Footer
	for (int i = 0; i < 75; i++) {
		out << "_";
	}

	out << endl;
	out << setw(23) << left << "Inventory Total ($)" << setw(45) << right << inventoryTotalValue << endl;

	system("pause");
	return 0;
}
</pre>
</div>