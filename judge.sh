#!/bin/bash

if [ $# -lt 1 ]; then    # check there is more than one parameter
  exit 1
fi

cat user.cpp > $1.cpp
g++ $1.cpp -o $1.out
cat testdata_$1 | ./$1.out > user_answer  # put the test data into the execution code and put the output to user_answer
diff correct_$1 user_answer > /dev/null # the stdout will be thrown to the /dev/null, instead screen

if [ $? -eq 0 ]; then    # if correct_answer and user_answer is the same ($? means the exit code of previous command, EX: return 0)
  echo "AC"
else		# if B_10041 and answer is different
  echo "WA"
fi


exit 0
