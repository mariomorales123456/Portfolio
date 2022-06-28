<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
#include <iostream>
#include <fstream>
#include <cmath>
#include <iomanip>
#include <string>
#include <cstdlib> // system("cls");

using namespace std;

void testCases();
void userPrompt();

//ADT

class romanType {
private:
	string roman;
	int modern;

public:
	romanType(string rm); //constructor
	romanType(); //constructor

	void setRoman(string rm);
	void setModern(int mdrn);
	string getRoman();
	int getModern();
	void convertToModern();
	void printModern();
	void printRoman();

	~romanType(); //destructor
};

//implementation

romanType::romanType(string rm) {
	modern = int();
	roman = rm;                        //constructor
} 
romanType::romanType() {
	modern = int();
	roman = string();                        //constructor
}
void romanType::setRoman(string rm) {
	roman = rm;
}
void romanType::setModern(int mdrn) {
	modern = mdrn;
}
string romanType::getRoman() {
	return roman;
}
int romanType::getModern() {
	return modern;
}
void romanType::convertToModern() {
	string rm = roman;
	int sum = 0;
	for (int i = 0; i < rm.length(); i++) {
		if (rm[i] == 'I') {
			sum += 1;
		}
		else if (rm[i] == 'V') {
			if (i > 0 && rm[i - 1] == 'I') {
				sum += 3;
			}
			else {
				sum += 5;
			}
		}
		else if (rm[i] == 'X') {
			if (i > 0 && rm[i - 1] == 'I') {
				sum += 8;
			}
			else {
				sum += 10;
			}
		}
		else if (rm[i] == 'L') {
			if (i > 0 && rm[i - 1] == 'X') {
				sum += 30;
			}
			else {
				sum += 50;
			}
		}
		else if (rm[i] == 'C') {
			if (i > 0 && rm[i - 1] == 'X') {
				sum += 80;
			}
			else {
				sum += 100;
			}
		}
		else if (rm[i] == 'D') {
			if (i > 0 && rm[i - 1] == 'C') {
				sum += 300;
			}
			else {
				sum += 500;
			}
		}
		else if (rm[i] == 'M') {
			if (i > 0 && rm[i - 1] == 'C') {
				sum += 800;
			}
			else {
				sum += 1000;
			}
		}
	}

	modern = sum;
};
void romanType::printModern() {
	cout << "Positive Integer: " << modern << endl;
}
void romanType::printRoman() {
	cout << "Roman Numeral: " << roman << endl;
}

romanType::~romanType() {} //destructor



//driver

int main() {
	cout << "Test Cases:" << endl;
	testCases();
	cout << endl;
	userPrompt();


	system("pause");
	return 0;
}

//methods

void testCases() {
	romanType Case1("MCXIV");
	romanType Case2("CCCLIX");
	romanType Case3("MDCLXVI");

	Case1.convertToModern();  //1114
	Case2.convertToModern();  //359
	Case3.convertToModern(); //1666

	cout << "MCXIV\t" << Case1.getModern() << endl;
	cout << "CCCLIX\t" << Case2.getModern() << endl;
	cout << "MDCLXVI\t" << Case3.getModern() << endl;
}
void userPrompt() {
	romanType tempObject;
	int choice = int();
	string newRoman = string();

	do {
		cout << "1) Enter a Roman Numeral." << endl;
		cout << "2) Print the Roman Numeral." << endl;
		cout << "3) Print the Positive Integer." << endl;
		cout << "4) End Program" << endl;

		cout << "Please enter a number for selection: ";
		cin >> choice;
		cout << endl;

		if (choice == 1) {
			system("cls");
			cout << "Enter Roman Numeral: ";
			cin >> newRoman;
			cout << endl;
			tempObject.setRoman(newRoman);
		}

		else if (choice == 2) {
			if (newRoman.empty()) {
				system("cls");
				cout << "You have not entered a roman numeral." << endl;
				cout << endl;
			}
			else {
				system("cls");
				tempObject.printRoman();
				cout << endl;
			}
		}
		else if (choice == 3) {
			if (newRoman.empty()) {
				system("cls");
				cout << "You have not entered a roman numeral." << endl;
				cout << endl;
			}
			else {
				tempObject.convertToModern();
				system("cls");
				tempObject.printModern();
				cout << endl;
			}
		}
		else if (choice == 4) {
			system("cls");
			tempObject.~romanType();
			cout << "Program Terminated." << endl;
			cout << endl;
		}
		else {
			cout << "Not a choice" << endl;
		}

	} while (choice != 4);
}
</pre>
</div>