// @ts-check

/**
 * Calculates the sum of the two input arrays.
 *
 * @param {number[]} array1
 * @param {number[]} array2
 * @returns {number} sum of the two arrays
 */
export function twoSum(array1, array2) {
  let a1num = '';
  for (let i=0; i < array1.length; i++) {
    a1num += array1[i];
  }
  
  let a2num = '';
  for (let i=0; i < array2.length; i++) {
    a2num += array2[i];
  }
  
  return Number(a1num) + Number(a2num);
}

/**
 * Checks whether a number is a palindrome.
 *
 * @param {number} value
 * @returns {boolean} whether the number is a palindrome or not
 */
export function luckyNumber(value) {
  let strValue = String(value).split('');
  let strValueReverse = strValue.slice().reverse();
  
  for (let i = 0; i < strValue.length / 2; i++) {
    if (strValue[i] !== strValueReverse[i])
      return false;
  }
  return true;
}

/**
 * Determines the error message that should be shown to the user
 * for the given input value.
 *
 * @param {string|null|undefined} input
 * @returns {string} error message
 */
export function errorMessage(input) {
  if (input === '' || input == null)
    return 'Required field';
  else if (String(Number(input)) === 'NaN' || Number(input) <= 0)
    return 'Must be a number besides 0';
  else
    return '';
}
