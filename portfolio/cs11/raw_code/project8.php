<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
#include <string>
#include <cmath>
#include <iomanip>
#include <fstream>
#include <iostream>
//#include <sstream>
#include <cstdlib> // system("cls");

using namespace std;

void getData();
void showMenu();
void printCheck(int choices[]);

struct menuItemType {
	int menuNumber;
	string menuItem;
	double price;
} menuList [8];

int main() {
	getData();
	showMenu();

	system("pause");
	return 0;
}

void getData() {
	//this function loads the data into the array menuList
	/*string menuItemList[8] = { "Plain Egg", "Bacon and Egg", "Muffin",
		"French Toast", "Fruit Basket", "Cereal", "Coffee", "Tea" };
	double menuPriceList[8] = { 1.45, 2.45, 0.99, 1.99, 2.49, 0.69, 
		0.50, 0.75 };*/

	ifstream in;
	in.open("menudata.txt");

	for (int i = 0; i < 8; i++) {
		menuList[i].menuNumber = i + 1;
		getline(in, menuList[i].menuItem);         //menuItemList[i];
		in >> menuList[i].price;                //menuPriceList[i];
		in.ignore();
	}

	//for (int i = 0; i < 8; i++) {
	//	menuList[i].menuNumber = i + 1;
	//	cout << "menuitem " << menuList[i].menuItem << endl;         //menuItemList[i];
	//	//in >> ignore();
	//	cout << "price " << menuList[i].price << endl;                //menuPriceList[i];

	//}
}

void showMenu() {
	//this function shows the different items offered by the
	//restaurant and tells users how to select items
	int choiceArray[50] = { 0 };
	int choice = int();
	int continueMenu = int();
	int itirations = 0;
	bool flag = true;
	do {

		cout << fixed << setprecision(2);

		for (int i = 0; i < 8; i++) {
			cout << menuList[i].menuNumber << ") " << setw(15) << left << menuList[i].menuItem << setw(5) << " " << " $" << menuList[i].price << endl;
		}

		cout << "9) " << setw(15) << "Proceed to checkout" << endl;

		cout << "Choose a menu item by its menu number: ";
		cin >> choice;
		cout << endl;
		//cout << "Do you want to order more? Please type in a number." << endl; 
		//cout << "1) Yes 2) No: ";
		//cin >> continueMenu;
		//cout << endl;

		if (choice == 9) {
			flag = false;
			system("cls");
			printCheck(choiceArray);
		}
		else { 
			choiceArray[itirations] = choice;
			itirations++; 
			system("cls");
		}

		if (itirations == 49) {
			bool newFlag = true;
			int newChoice = int();

			flag = false;
			cout << "Error: Invoice limit reached you can not order anymore." << endl;
			while (newFlag == true) {
				cout << "Proceed to checkout? Please enter a number." << endl;
				cout << "1) Yes 2) No";
				cin >> newChoice;
				cout << endl;
				if (newChoice == 1) {
					system("cls");
					printCheck(choiceArray);

				}
			}

			
		}

		
		
	} while (flag == true);
}

void printCheck(int choices[]) {
	//this function calculates and prints the check. (Note that
	//the billing amount should include 5% tax)
	//output with two decimal places
	//names left justified
	int index = 0;
	double sum = 0;
	double tax = 0;

	cout << fixed << setprecision(2);

	while (choices[index] != 0) {
		cout << setw(15) << menuList[choices[index] - 1].menuItem << setw(5) << " " << "$" << menuList[choices[index] - 1].price << endl;
		sum += menuList[index].price;
		index++;
	}

	tax = sum * 0.05;
	sum += tax;

	cout << setw(15) << "Tax" << setw(5) << " " << "$" << tax << endl;
	cout << setw(15) << "Total" << setw(5) << " " << "$" << sum << endl;
}
</pre>
</div>