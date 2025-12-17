// @ts-check
//
// The line above enables type checking for this file. Various IDEs interpret
// the @ts-check directive. It will give you helpful autocompletion when
// implementing this exercise.

/**
 * Determines whether or not you need a license to operate a certain kind of vehicle.
 *
 * @param {string} kind
 * @returns {boolean} whether a licens e is required
 */
export function needsLicense(kind) {
  let need = false;
  if (kind === 'car' || kind === 'truck') {
    need = true;
  }
  return need;
}

/**
 * Helps choosing between two options by recommending the one that
 * comes first in dictionary order.
 *
 * @param {string} option1
 * @param {string} option2
 * @returns {string} a sentence of advice which option to choose
 */
export function chooseVehicle(option1, option2) {
  const rest = ' is clearly the better choice.';
  let car = 0;
  
  if (option1 < option2) {
    car = option1
  } else {
    car = option2
  }
  return car + rest;
}

/**
 * Calculates an estimate for the price of a used vehicle in the dealership
 * based on the original price and the age of the vehicle.
 *
 * @param {number} originalPrice
 * @param {number} age
 * @returns {number} expected resell price in the dealership
 */
export function calculateResellPrice(originalPrice, age) {
  let price = originalPrice;
  
  if (age < 3) {
    price = originalPrice * 0.8;
  } else if (age <= 10) {
    price = originalPrice * 0.7;
  } else {
    price = originalPrice * 0.5;
  }
  return price;
}
