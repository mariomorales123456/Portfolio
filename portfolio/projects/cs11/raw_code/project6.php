<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
#include <String>
#include <iomanip>
#include <cmath>
#include <fstream>
#include <iostream>

using namespace std;

string getZipcode();
int checkDigitCalc(string);
string barcodeConstruction(int, string);
void printBarcode(string);

int main() {
	string zipcode = getZipcode();
	int checkDigit = checkDigitCalc(zipcode);
	string barcode = barcodeConstruction(checkDigit, zipcode);
	printBarcode(barcode);

	system("pause");
	return 0;
}

string getZipcode() {
	string zipcode = string();

	cout << "Please type in a 5 digit Zipcode: ";
	cin >> zipcode;
	cout << endl;

	return zipcode;
}

int checkDigitCalc(string zipcode) {

	int zipcodeSum = int();
	int checkDigit = int();
	int remainder = int();

	for (int i = 0; i < zipcode.length(); i++) {
		int charToDigit = s[i] - '0';
		zipcodeSum += charToDigit;
	}

	remainder = zipcodeSum % 10;

	if (remainder > 5) {
		checkDigit = 10 - remainder;
	}
	else {
		checkDigit = remainder;
	}

	return checkDigit;
}

string barcodeConstruction(int checkDigit, string s) {
	string barcode = string();

	//string array
	string barcodeTable[10] = { "||:::",":::||","::|:|","::||:",":|::|",":|:|:",
							":||::","|:::|","|::|:","|:|::" };

	//string construction
	barcode += "|";
	for (int i = 0; i < s.length(); i++) {
		int charToDigit = s[i] - '0';
		barcode += barcodeTable[charToDigit];
	}
	barcode += barcodeTable[checkDigit];
	barcode += "|";


	return barcode;

}

void printBarcode(string barcode) {
	cout << "Barcode: " << barcode;
	cout << endl << endl;
}
</pre>
</div>