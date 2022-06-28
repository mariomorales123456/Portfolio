<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
#include <iostream>
#include <string>

using namespace std;

int main() {

	int cs11 = int();
	int cs12 = int();
	int cs22 = int();
	int studentId = int();
	string firstName = string();
	string lastName = string();
	int total = int();
	double average = double();
	string grade = string();
	string comment = string();
	const int NUMBEROFCLASSES = 3;


	cout << "===============================================================" << endl;
	cout << "Student Grading System (SGS)" << endl;
	cout << "Long Beach City College" << endl;
	cout << "Author: Mario Morales" << endl;
	cout << "2/15/19" << endl;
	cout << "===============================================================" << endl;

	cout << "What is your student ID?" << endl;
	cin >> studentId;
	cout << "What is your first name?" << endl;
	cin >> firstName;
	cout << "What is your last name?" << endl;
	cin >> lastName;
	cout << "What is your score in CS11?" << endl;
	cin >> cs11;
	cout << "What is your score in CS12?" << endl;
	cin >> cs12;
	cout << "What is your score in CS22?" << endl;
	cin >> cs22;
	cout << "===============================================================" << endl;

	total = cs11 + cs12 + cs22; //calc
	average = total / NUMBEROFCLASSES; //calc

	if (average >= 90) {
		grade = "A";
		comment = "Congratulations on your achievements!";
	}
	else if (average >= 80) {
		grade = "B";
		comment = "Congratulations on your achievements!";
	}
	else if (average >= 70) {
		grade = "C";
		comment = "Congratulations on your achievements!";
	}
	else if (average >= 60) {
		grade = "D";
		comment = "You barely made it.";
	}
	else {
		grade = "F";
		comment = "Sorry try harder next time.";
	}

	cout << "ID: " << studentId << endl;
	cout << "First Name: " << firstName << endl;
	cout << "Last Name: " << lastName << endl;
	cout << "Total: " << total << endl;
	cout << "Average: " << average << "%" << endl;
	cout << "Grade: " << grade << endl;
	cout << "Comments: " << comment << endl;

	system("pause");
	return 0;
}
</pre>
</div>