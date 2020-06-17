<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
#include <iomanip>
#include <fstream>
#include <cmath>
#include <string>
#include <iostream>

using namespace std;

int main() {
	//const
	double federalIncomeTax = 0.15;
	double stateTax = 0.035;
	double socialSecurityTax = 0.0575;
	double medicareTax = 0.0275;
	double pensionPlan = 0.05;
	double healthInsurance = 75.00;
	//outputs
	double federalIncomeTaxCalc = double();
	double stateTaxCalc = double();
	double socialSecurityTaxCalc = double();
	double medicareTaxCalc = double();
	double pensionPlanCalc = double();
	double netPay = double();
	//inputs
	string fname = string();
	string lname = string();
	double grossIncome = double();
	//
	// prompts
	//
	cout << "What is your first name? ";
	cin >> fname;
	cout << "What is your last name? ";
	cin >> lname;
	cout << "What is your gross income? ";
	cin >> grossIncome;
	cout << endl;
	//
	//calcs
	//
	federalIncomeTaxCalc = grossIncome * federalIncomeTax;
	stateTaxCalc = grossIncome * stateTax;
	socialSecurityTaxCalc = grossIncome * socialSecurityTax;
	medicareTaxCalc = grossIncome * medicareTax;
	pensionPlanCalc = grossIncome * pensionPlan;
	netPay = grossIncome - (federalIncomeTaxCalc + stateTaxCalc + socialSecurityTaxCalc + medicareTaxCalc + pensionPlanCalc + healthInsurance);
	//
	// console output
	//
	cout << fixed << setprecision(2);

	cout << fname << " " << lname << endl;
	cout << setw(25) << left << setfill('.') << "Gross Amount: " << "$" << setw(9) << right << setfill(' ') 
		 << grossIncome << endl;
	cout << setw(25) << left << setfill('.') << "Federal Tax: " << "$" << setw(9) << right << setfill(' ')
		<< federalIncomeTaxCalc << endl;
	cout << setw(25) << left << setfill('.') << "State Tax: " << "$" << setw(9) << right << setfill(' ')
		<< stateTaxCalc << endl;
	cout << setw(25) << left << setfill('.') << "Social Security Tax: " << "$" << setw(9) << right
		<< setfill(' ') << socialSecurityTaxCalc << endl;
	cout << setw(25) << left << setfill('.') << "Medicare/Medicaid Tax: " << "$" << setw(9) << right
		<< setfill(' ') << medicareTaxCalc << endl;
	cout << setw(25) << left << setfill('.') << "Pension Plan: " << "$" << setw(9) << right
		<< setfill(' ') << pensionPlanCalc << endl;
	cout << setw(25) << left << setfill('.') << "Health Insurance: " << "$" << setw(9) << right
		<< setfill(' ') << healthInsurance << endl;
	cout << setw(25) << left << setfill('.') << "Net Pay: " << "$" << setw(9) << right
		<< setfill(' ') << netPay << endl;
	//
	//file output
	//

	ofstream out;
	out.open("output.txt");

	out << fixed << setprecision(2);

	out << fname << " " << lname << endl;
	out << setw(25) << left << setfill('.') << "Gross Amount: " << "$" << setw(9) << right << setfill(' ')
		<< grossIncome << endl;
	out << setw(25) << left << setfill('.') << "Federal Tax: " << "$" << setw(9) << right << setfill(' ')
		<< federalIncomeTaxCalc << endl;
	out << setw(25) << left << setfill('.') << "State Tax: " << "$" << setw(9) << right << setfill(' ')
		<< stateTaxCalc << endl;
	out << setw(25) << left << setfill('.') << "Social Security Tax: " << "$" << setw(9) << right
		<< setfill(' ') << socialSecurityTaxCalc << endl;
	out << setw(25) << left << setfill('.') << "Medicare/Medicaid Tax: " << "$" << setw(9) << right
		<< setfill(' ') << medicareTaxCalc << endl;
	out << setw(25) << left << setfill('.') << "Pension Plan: " << "$" << setw(9) << right
		<< setfill(' ') << pensionPlanCalc << endl;
	out << setw(25) << left << setfill('.') << "Health Insurance: " << "$" << setw(9) << right
		<< setfill(' ') << healthInsurance << endl;
	out << setw(25) << left << setfill('.') << "Net Pay: " << "$" << setw(9) << right
		<< setfill(' ') << netPay << endl;

	system("pause");
	return 0;
}
</pre>
</div>