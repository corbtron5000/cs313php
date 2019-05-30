insert into meals(directions) values ('1 Mix powdered sugar and butter with spoon or electric mixer on low speed. Stir in vanilla and 1 tbsp of the milk. Add more milk gradually if desired for consistency. 

	2 If adding chocolate, melt the chocolate in a glass bowl in the microwave, then fold into the frosting.') where meals.meals_id = 1;

update meals set directions = '1 Mix powdered sugar and butter with spoon or electric mixer on low speed. Stir in vanilla and 1 tbsp of the milk. Add more milk gradually if desired for consistency. 

	2 If adding chocolate, melt the chocolate in a glass bowl in the microwave, then fold into the frosting.' where meals_id = 1;



select mi.ingredient_quantity, mi.ingredient_measurements, i.name from ingredients as i join mealsIngredients as mi on i.ingredients_id = mi.ingredients_id join meals as m on m.meals_id = mi.meals_id;

delete from mealsIngredients where meals_ingredients_id = 8;


insert into meals(name, description, Directions, serving_size) 