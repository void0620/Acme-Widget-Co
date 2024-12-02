# Description

This PHP script calculates the total cost of purchased products. It includes special rules for discounts, delivery charges, and warnings for invalid product entries.

## How it works

### 1. Input products

Input purchased products' code separated by comma.\
Example: R01, G01, B01, R01

### 2. Calculate total costs

Each valid product has a predefined price. If a product code does not match any of these, a warning message is displayed and the product is ignored.

R01: $32.95\
G01: $24.95\
B01: $7.95

If multiple R01 products are purchased, every second R01 is sold at half price ($16.47)

### 3. Delivery cost

Delivery charges are added based on the total cost before delivery:\
Below $50: Add $4.95.\
Between $50 and $90: Add $2.95.\
90 and above: Free delivery.

### 4. Output

The total cost including delivery charges is displayed.

## Assumptions

### 1.Product codes

Only R01, G01, and B01 are valid product codes. Any other code will trigger a warning and be ignored.

### 2.Input format

It is assumed that the user enters a valid product codes separated by comma. No validation for empty input or unusual formats is provided.