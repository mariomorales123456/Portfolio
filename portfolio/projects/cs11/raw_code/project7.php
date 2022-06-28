<?php include('../../includes/head.php'); ?>

<div class="raw_code_container">
<pre>
#include <iostream>
#include <fstream>
#include <cmath>
#include <string>
#include <iomanip>

using namespace std;

void fillArrays();

int main() {

	fillArrays();

	system("pause");
	return 0;
}

void fillArrays() {
	/////////////input
	ifstream in;
	in.open("candidates.txt");

	/////////// variables & arrays
	int votes[5] = {};
	string candidates[5] = {};
	double percentages[5] = {};
	int sum = 0;
	string winner = string();
	int maxNumber = 0;

	/////////filling arrays & calcs
	for (int i = 0; i < 5; i++) {
		in >> candidates[i];
		in >> votes[i];
		sum += votes[i];
		if (maxNumber < votes[i]) {
			maxNumber = votes[i];
			winner = candidates[i];
		}
	}

	for (int i = 0; i < 5; i++) {
		percentages[i] = static_cast<double>(votes[i]) / static_cast<double>(sum);
		percentages[i] *= 100;
	}

	///////output

	cout << fixed << setprecision(2);

	cout << setw(15) << left << "Candidate" << setw(20) << left << 
		"Votes Received" << setw(20) << left << "% of Total Votes" << endl;

	for (int i = 0; i < 5; i++) {
		cout << setw(15) << left << candidates[i] << setw(10) << right << votes[i] <<
			setw(21) << right << percentages[i] << endl;
	}
	
	cout << setw(15) << left << "Total" << setw(10) << right << sum << endl;
	cout << "The winner of the election is " << winner << "." << endl;
}
</pre>
</div>