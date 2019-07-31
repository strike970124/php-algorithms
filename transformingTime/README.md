# Transforming Time Algorithm

### Problem
Given a time in **12**[-hour AM/PM format](https://en.wikipedia.org/wiki/12-hour_clock), convert it to military (24-hour) time.
Note: Midnight is 12:00:00AM on a 12-hour clock, and 00:00:00 on a 24-hour clock. Noon is 12:00:00PM on a 12-hour clock, and 12:00:00 on a 24-hour clock.

### Function Description

Complete the **_transformingTime_** function in the file **`transformingTime/transformingTime.php`**. It should return a new string representing the input time in 24 hour format.

- s: a string representing time in **12** hour format

### Input Format

A single string ***s*** containing a time in **12**-hour clock format (i.e: **hh:mm:ssAM** or **hh:mm:ssPM**), where <a href="https://www.codecogs.com/eqnedit.php?latex=\mathbf{01}&space;\leq&space;\mathbf{hh}&space;\leq&space;\mathbf{12}" target="_blank"><img src="https://latex.codecogs.com/gif.latex?\mathbf{01}&space;\leq&space;\mathbf{hh}&space;\leq&space;\mathbf{12}" title="\mathbf{01} \leq \mathbf{hh} \leq \mathbf{12}" /></a> and <a href="https://www.codecogs.com/eqnedit.php?latex=\inline&space;\large&space;\mathbf{00}&space;\leq&space;\mathbf{mm},&space;\mathbf{ss}&space;\leq&space;\mathbf{59}" target="_blank"><img src="https://latex.codecogs.com/png.latex?\inline&space;\large&space;\mathbf{00}&space;\leq&space;\mathbf{mm},&space;\mathbf{ss}&space;\leq&space;\mathbf{59}" title="\large \mathbf{00} \leq \mathbf{mm}, \mathbf{ss} \leq \mathbf{59}" /></a>.

### Constraints

- All input times are valid

### Output Format

Convert and print the given time in **24**-hour format, where <a href="https://www.codecogs.com/eqnedit.php?latex=\mathbf{00}&space;\leq&space;\mathbf{hh}&space;\leq&space;\mathbf{23}" target="_blank"><img src="https://latex.codecogs.com/gif.latex?\mathbf{00}&space;\leq&space;\mathbf{hh}&space;\leq&space;\mathbf{23}" title="\mathbf{00} \leq \mathbf{hh} \leq \mathbf{23}" /></a>.

### Sample Input

```
04:35:49PM
```

### Sample Output

```
16:35:49
```
