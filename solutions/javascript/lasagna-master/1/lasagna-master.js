/// <reference path="./global.d.ts" />
// @ts-check

export function cookingStatus(remainingTime) {
  if (remainingTime === 0) {
    return 'Lasagna is done.'
  } else if (remainingTime > 0) {
    return 'Not done, please wait.'
  }  else {
    return 'You forgot to set the timer.'
  }
}

export function preparationTime(layers, TimePerLayer = 2) {
  return layers.length * TimePerLayer
}

export function quantities(layers) {
  const obj = {
    noodles: 0,
    sauce: 0,
  }

  for (let i=0; i < layers.length; i++) {
    if (layers[i] === 'noodles') {
      obj.noodles += 50
    } else if (layers[i] === 'sauce') {
      obj.sauce += 0.2
    }
  }
  return obj
}

export function addSecretIngredient(friendsList, myList) {
  myList[myList.length] = friendsList[friendsList.length-1]
}

export function scaleRecipe(recipeX2, portions) {
  const recipe = {}
  for (const i in recipeX2) {
    recipe[i] = recipeX2[i] / 2 * portions
  }
  return recipe
}