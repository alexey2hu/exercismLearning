/// <reference path="./global.d.ts" />
//
// @ts-check
//
// The lines above enable type checking for this file. Various IDEs interpret
// the @ts-check and reference directives. Together, they give you helpful
// autocompletion when implementing this exercise. You don't need to understand
// them in order to use it.
//
// In your own projects, files, and code, you can play with @ts-check as well.

import { notify } from './notifier';
import { order } from './grocer';

/**
 * @return void
 */
export function onSuccess() {
  const obj1 = {
    message: 'SUCCESS',
  }
  return notify(obj1)
}

/**
 * @return void
 */
export function onError() {
  const obj1 = {
    message: 'ERROR',
  }
  return notify(obj1)
}

/**
 * @param {GrocerQuery} query
 * @param {FruitPickerSuccessCallback} onSuccessCallback
 * @param {FruitPickerErrorCallback} onErrorCallback
 * @return void
 */
export function orderFromGrocer(query, onSuccessCallback, onErrorCallback) {
  return order(query, onSuccessCallback, onErrorCallback)
}

/**
 * @param {string} variety
 * @param {number} quantity
 * @return void
 */
export function postOrder(variety, quantity) {
  const query = {
    variety: variety,
    quantity: quantity,
  }
  return orderFromGrocer(query, onSuccess, onError)
}
