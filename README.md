# Fabbi PHP

<!-- toc -->

- [Fabbi PHP](#fabbi-php-assignment-1)
  - [Requirements](#requirements)
    - [Must](#must)
    - [Optional](#optional)
  - [Setup](#setup)
  - [Description](#description)
    - [Step 1](#step-1)
    - [Step 2](#step-2)
    - [Step 3](#step-3)
    - [Step 4](#step-4)
  - [Notes](#notes)
  - [Submission](#submission)
  - [FAQs](#faqs)

<!-- tocstop -->

## Requirements

### Must

- Use `PHP / Laravel`
- Use `HTML /  CSS/ JS`

### Optional
- Use vuejs or laravel blade
- Use with [Ant Design](https://ant.design/) or [MaterialUI](https://material-ui.com/)
- Use a type system (preferred `typescript`)

## Setup

Install with laravel latest version

## Description

We want to make multiple steps form. This form is aimed to help user pre-order food from restaurants, the data for restaurants and food items and is provided in the [data](./data) folder.

Wireframes for the form are provided in the [wire frames](./wireframes) folder.

---
![step 1](./wireframes/Step%201.png "step 1")

### Step 1

- Users select the Meal Category (breakfast, lunch, or dinner).
- They also need to input the number of people (maximum 10)

Both of these should be required fields.

---
![step 2](./wireframes/Step%202.png "step 2")

### Step 2

- Users select appropriate restaurants that provide meals based on a selection in the first step.

This is also a required field.

---
![step 3](./wireframes/Step%203.png "step 3")

### Step 3

- User selects dishes they want to pre-order based on the meal and restaurant they selected in the first two steps.

- They first choose a dish
- They can also add a number of servings of the dish (defaulted to 1)
- Also users can't select the same dish twice, rather add more servings.

The total number of dishes (i.e Number of dishes \* respective serving) should be greater or equal to the number of people selected in the first step and a maximum of 10 is allowed.

---
![step 4](./wireframes/Step%204.png "step 4")

### Step 4

On the final step, users should be able to review all their previous choices
and click submit.

## Notes

- User can't proceed to the next step unless they have valid inputs on the current step.
- if their inputs are not valid, show appropriate validation errors.
- At any step users can go back and change their preference on any previous step.
- Finally when the user submits the form, just log the data on the console as we don't provide any back end for now.
- Finer details of UX is left for you to decide.

## Submission

- Submit a working link of your code repository (GitHub)
- Submit a link of the deployed app (github.io/ now/ surge, etc...)

## FAQs

- Library Usage
  - You are free to use any 3rd party library you want, although we might ask for justification.
