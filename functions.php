<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function makeIceCream($type) {
  if ($type == 'vanilla') {
    echo '<p>Vanilla ice cream is a soft frozen dessert made with vanilla bean extract, milk, and cream.</p>';
  } else if ($type == 'chocolate') {
    echo '<p>Chocolate ice cream is a soft frozen dessert made with coco powder, milk and cream.</p>';
} else if ($type == 'strawberry') {
    echo '<p>Strawberry ice cream is a soft frozen dessert made with blended strawberries or flavoring, milk and cream.</p>';
  } else {
    echo '<p>That&rsquo;s not a popular ice cream flavor.</p>';
  }
}