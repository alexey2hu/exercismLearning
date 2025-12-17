// @ts-check
//
// The line above enables type checking for this file. Various IDEs interpret
// the @ts-check directive. It will give you helpful autocompletion when
// implementing this exercise.

/**
 * Calculates the total bird count.
 *
 * @param {number[]} birdsPerDay
 * @returns {number} total bird count
 */
export function totalBirdCount(birdsPerDay) {
  let num = 0;
  for (let i = 0; i < birdsPerDay.length; i++) {
    num += birdsPerDay[i];
  }
  return num;
}

/**
 * Calculates the total number of birds seen in a specific week.
 *
 * @param {number[]} birdsPerDay
 * @param {number} week
 * @returns {number} birds counted in the given week
 */
export function birdsInWeek(birdsPerDay, week) {
  const days = 7 * week;
  let bpw = 0;
  for (let i = days - 7; i < days; i++) {
    bpw += birdsPerDay[i];
  }
  return bpw;
}

/**
 * Fixes the counting mistake by increasing the bird count
 * by one for every second day.
 *
 * @param {number[]} birdsPerDay
 * @returns {number[]} corrected bird count data
 */
export function fixBirdCountLog(birdsPerDay) {
  let fix = true;
  for (let i = 0; i < birdsPerDay.length; i++) {
    if (fix === true) {
      fix = false;
      birdsPerDay[i]++;
    } else {
      fix = true;
    }
  }
  return birdsPerDay;
}
