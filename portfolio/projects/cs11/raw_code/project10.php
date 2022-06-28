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

void greeting();
void getName();
void readScore();
void reportNoScore(struct student studentFile);
double calculateAverage(int i);
char assignGrade(int i);
void printData(int i);
void farewell();
void fileParse();

const int structArrayLength = 5; // requires knowing how many students exist
const int scoresArrayLength = 5;  //requires knowing max number of tests a single student can take

struct student {
	string fname;
	string lname;
	int scores[scoresArrayLength];
	int scoreSum;
	double averageScore;
	char grade;
} studentList[structArrayLength];

int main() {
	fileParse();
	greeting();
	getName();
	readScore();
	for (int i = 0; i < structArrayLength; i++) {
		studentList[i].averageScore = calculateAverage(i);
	}
	cout << "Average loaded in to Struct Array" << endl;
	for (int i = 0; i < structArrayLength; i++) {
		studentList[i].grade = assignGrade(i);
	}
	cout << "Grade loaded in to Struct Array" << endl;
	cout << endl;
	for (int i = 0; i < structArrayLength; i++) {
		printData(i);
	}
	cout << endl;
	cout << "Student data printed to output file" << endl;
	farewell();

	system("pause");
	return 0;
}
void fileParse() {

	string s = string();
	char c = char();
	int i = int();
	int counter = int();
	string fileName = string();

	cout << "Enter a data file to parse: ";
	cin >> fileName;
	cout << endl;

	ifstream in;
	in.open(fileName);
	ofstream out;
	out.open("parsedData.txt");
	if (in.eof()) {
		cout << "File is empty!" << endl;
	}
	else {
	while (!in.eof()) {
		for (int j = 0; j < 2; j++) {
			in >> s;
			out << s << " ";
		}
		getline(in, s);
		for (int j = 0; j < s.length(); j++) {
			if (isdigit(s[j])) {
				out << s[j];
				counter++;
				if (counter == 2) {
					out << " ";
					counter = 0;
				}
			}
		}
		out << endl;
	}
}
	cout << fileName << " parsed to parsedData.txt" << endl;
	cout << endl;
}
void greeting() {
	/*The function greeting () generates generalized greeting and
	outputs to the output file as the first message*/

	ofstream out;
	out.open("outputFile.txt");

	cout << "Hello! This is the file's information:" << endl;
	out << "Hello! This is the file's information:" << endl;

	out.close();

}

void getName() {
	/*The function reads the name of the student from the data file and processes the name
	as needed (for example for outputting etc)*/

	ifstream in;
	in.open("parsedData.txt");

	int score = int();
	int i = int();
	string s = string();

	while (!in.eof()) {
		in >> studentList[i].fname;
		in >> studentList[i].lname;
		getline(in, s);

		i++;
	}

	cout << "Names loaded in to Struct Array" << endl;

	in.close();
}
void readScore() {
	/*The function reads and sums the student scores and keeps track of number of scores read. Both the
	sum of scores and number of scores read are returned by reference*/

	ifstream in;
	in.open("parsedData.txt");

	string name = string();
	int j = int();
	int number = int();

	while (!in.eof()) {
		for (int i = 0; i < 2; i++) {
			in >> name;
		}
		for (int i = 0; i < scoresArrayLength; i++){
			if (isdigit((in >> ws).peek())) {
				in >> studentList[j].scores[i];
				studentList[j].scoreSum += studentList[j].scores[i];
			}
		}
		j++;
	}

	cout << "Scores loaded in to Struct Array" << endl;

	in.close();
}
void reportNoScore(struct student studentFile) {
	/*If the file has no scores for a student, the function generates a message printing
	student name and the fact that there are no scores found for that student*/

	ofstream out;
	out.open("outputFile.txt", std::ios_base::app);
	cout << "The file for " << studentFile.fname << " " << studentFile.lname << " has no scores" << endl;
	out << "The file for " << studentFile.fname << " " << studentFile.lname << " has no scores" << endl;

	out.close();
}
double calculateAverage(int i) {
	/*The function take the sum of all scores and as to how many scores were read and returns
	the average score*/

	double score = double();
	double sum = double();
	double counter = double();

		for (int j = 0; j < scoresArrayLength; j++) {
			sum += studentList[i].scores[j];
			if (studentList[i].scores[j] != 0) {
				counter++;
			}
		}
		if (sum == 0) {
			return 0;
		}

	return sum / counter;

}
char assignGrade(int i) {
	/*The function takes the average score calculated by function calculateAverage() and
	returns a letter grade*/
	if (studentList[i].averageScore >= 90) {
		return 'A';
	}
	else if (studentList[i].averageScore >= 80) {
		return 'B';
	}
	else if (studentList[i].averageScore >= 70) {
		return 'C';
	}
	else if (studentList[i].averageScore >= 60) {
		return 'D';
	}
	else if (studentList[i].averageScore == 0) {
		return 'W';
	}
	else if (studentList[i].averageScore < 60) {
		return 'F';
	}
	else {
		cout << "Debug - error in logic" << endl;
		return 'E';
	}

}
void printData(int i) {
	/*The function printData() prints the student name, their overall average and their grade
	to the output file*/
	ofstream out;
	out.open("outputFile.txt", std::ios_base::app);

	cout << fixed << setprecision(2);

	cout << studentList[i].fname << " " << studentList[i].lname << " ";
		if (studentList[i].averageScore == 0) {
			cout << " ";
		}
		else {
			cout << studentList[i].averageScore;
		}

		cout << " " << studentList[i].grade << endl;
	if (studentList[i].grade == 'W') {
		reportNoScore(studentList[i]);
	}
	out << studentList[i].fname << " " << studentList[i].lname << " ";
	if (studentList[i].averageScore == 0) {
		out << " ";
	}
	else {
		out << studentList[i].averageScore;
	}

	out << " " << studentList[i].grade << endl;

	out.close();
}
void farewell() {
	/*The program prints the farewell message in the output file, signifying the end of program*/
	
	ofstream out;
	out.open("outputFile.txt", std::ios_base::app);

	cout << "Program Terminated. Farewell!" << endl;
	out << "Program Terminated. Farewell!" << endl;

	out.close();
}
</pre>
</div>