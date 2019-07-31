
# Vector Sorting Algorithm

In this exercise you must create a matrix of **5 rows** x **3 columns** with the values shown in **figure 1**; in addition, when you run the program, **the matrix must automatically load its assigned values**.

<table>
 <tr align="center">
  <td colspan="5"><b>Source Matrix</b></td>
 </tr>
 <tr>
  <td><b>5</b></td>
  <td><b>9</b></td>
  <td><b>10</b></td>
  <td><b>6</b></td>
  <td><b>1</b></td>
 </tr>
 <tr>
  <td><b>6</b></td>
  <td><b>8</b></td>
  <td><b>5</b></td>
  <td><b>4</b></td>
  <td><b>12</b></td>
 </tr>
 <tr>
  <td><b>7</b></td>
  <td><b>3</b></td>
  <td><b>8</b></td>
  <td><b>2</b></td>
  <td><b>7</b></td>
 </tr>
</table>

***Fig. 1 - Source Matrix***

The algorithm must copy one by one the values of the matrix to a vector in the following way:

 1. When passing the values of the matrix, the **even values** must remain in the **first half** of the vector, sorted in **ascending** order as shown in **figure 2**.
 2. In the same way, the **odd values** must remain in the **second half** of the vector, sorted in **ascending** order as indicated in **figure 2**.

<table>
 <tr align="center">
  <td colspan="16"><b>New Vector</b></td>
 </tr>
 <tr>
  <td>2</td>
  <td>4</td>
  <td>6</td>
  <td>8</td>
  <td>10</td>
  <td>12</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>0</td>
  <td>9</td>
  <td>7</td>
  <td>5</td>
  <td>3</td>
  <td>1</td>
 </tr>
</table>

***Fig. 2 - New vector***

# Rules

1. **The matrix must be run sequentially in rows.**
2. **The values of the matrix must be copied to the vector as the matrix is traversed. In addition, each value must be iterated, regardless of whether it is even or odd.**
3. **It is not allowed to sort the matrix and neither is it allowed to sort the vector after storing a value in that vector.**
4. **It is not allowed to pass the even values and then pass the odd values.**
5. **The vector must be ordered as it is built and cannot contain repeated values.**
6. **It is not allowed to use a vector or temporal matrix to sort or save the values, and then pass them to the vector.**
