<?php
// Ingredient master array with calories (kcal)/gram
	
$ingredient_list = array(
	array("aubergine", 0.24),
	array("balsamic vinegar", 0.88),
	array("basil", 0.22),
	array("bay", 3.7),
	array("beet", 0.43),
	array("bok choy", 0.13),
	array("broccoli", 0.33),
	array("brussels sprout", 0.42),
	array("butternut sqaush", 0.44),
	array("caper", 0.22),
	array("carrot", 0.41),
	array("cauliflower", 0.24),
	array("celery", 0.16),
	array("chestnut mushroom", 0.28),
	array("chickpeas", 3.64),
	array("chicken breast", 1.57),
	array("chicken broth", 0.10),
	array("chili sauce", 0.11),
	array("chorizo", 4.55),
	array("cilantro", 0.22),
	array("corn", 3.65),
	array("courgette", 0.16),
	array("daikon radish", 0.18),
	array("diced tomato", 0.18),
	array("dill", 3.05),
	array("dried tomato", 2.12),
	array("egg", 1.55),
	array("garlic clove", 1.48),
	array("garlic powder", 3.31),
	array("ginger", 0.79),
	array("greek yogurt", 0.58),
	array("ground pork", 2.40),
	array("honey", 3.04),
	array("fish sauce", 0.34),
	array("lemon wedge", 0.29),
	array("lemon zest", 0.06),
	array("lemon juice", 0.25),
	array("olive", 1.15),
	array("olive oil", 8.84),
	array("oregano", 0),
	array("parmesan cheese", 4.31),
	array("parsley", 0.36),
	array("pepper", 0),
	array("peppers", 2.51),
	array("pinenut", 6.73),
	array("prociutto", 2.44),
	array("red onion", 0.37),
	array("red pepper flake", 3.15),
	array("red pepper", 0.26),
	array("rosemary", 3.31),
	array("rucola", 0.25),
	array("sage", 0.59),
	array("salt", 0),
	array("scallion", 0.32),
	array("sesame oil", 7.94),
	array("sesame seeds", 5.65),
	array("shiitake mushroom", 0.51),
	array("soy sauce", 0.53),
	array("spinach", 0.25),
	array("sprig", 0),
	array("steak", 1.50),
	array("teriyaki sauce", 0.84),
	array("thyme", 0.01),
	array("tomato", 0.17),
	array("tomato puree", 0.37),
	array("vegetable broth", 0.07),
	array("walnut", 6.54),
	array("water", 0),
	array("white onion", 0.31),
	array("white wine", 0.81),
	array("wraps", 3.00),
	array("zucchini", 0.16)
	);
	
// Ingredients for each recipe with amounts in grams
	
$ingredients_basil_pomodoro = array
	(
		array("olive oil", 15),
		array("chicken breast", 227),
		array("garlic powder", 4),
		array("garlic clove", 3),
		array("white onions", 78),
		array("diced tomato", 397),
		array("basil", 2),
		array("zucchini", 400)
	);
	
$ingredients_butternut_squash = array
	(
		array("butternut squash", 300),
		array("olive oil", 38),
		array("garlic powder", 1),
		array("walnut", 118),
		array("brussels sprout", 237),
		array("red onion", 50),
		array("garlic clove", 3),
		array("red pepper flakes", 1),
		array("parmesan cheese", 59)
	);

$ingredients_daikon_noodles = array
	(
		array("ground pork", 500),
		array("ginger", 20),
		array("scallion", 78),
		array("soy sauce", 30),
		array("garlic", 5),
		array("cilantro", 50),
		array("sesame oil", 5),
		array("broccoli", 150),
		array("chicken broth", 946),
		array("fish sauce", 15),
		array("chili sauce", 10),
		array("daikon radish", 1360)
	);
	
$ingredients_egg_rocket = array
	(
		array("wraps", 50),
		array("olive oil", 10),
		array("red pepper", 200),
		array("tomato", 230),
		array("tomato puree", 30),
		array("dill", 15),
		array("parsley", 15),
		array("egg", 104),
		array("rucola", 65),
		array("red onion", 25)
	);
	
$ingredients_chicken_cacciatore = array
	(
		array("olive oil", 15),
		array("prosciutto", 20),
		array("white onion", 50),
		array("garlic clove", 6),
		array("sage", 2),
		array("rosemary", 2),
		array("chicken breast", 550),
		array("white wine", 150),
		array("tomato", 400),
		array("tomato puree", 15),
		array("chestnut mushroom", 225),
		array("parsley", 10)
	);
	
$ingredients_paillard_chicken = array
	(
		array("chicken breast", 650),
		array("olive oil", 75),
		array("balsamic vinegar", 30),
		array("rucola", 140),
		array("lemon wedge", 20),
		array("garlic clove", 6),
		array("rosemary", 4),
		array("sage", 6),
		array("lemon zest", 8),
		array("lemon juice", 20)
	);
	
$ingredients_pisto_huevos = array
	(
		array("olive oil", 30),
		array("white onion", 100),
		array("garlic clove", 12),
		array("peppers", 600),
		array("oregano", 6),
		array("thyme", 2),
		array("bay", 3),
		array("courgette", 80),
		array("aubergine", 60),
		array("tomato", 220),
		array("egg", 240),
		array("parley", 15)
	);
	
$ingredients_beet_noodles = array
	(
		array("beet", 290),
		array("olive oil", 80),
		array("baby kale", 400),
		array("basil", 500),
		array("pinenut", 60),
		array("garlic clove", 3)
	);
	
$ingredients_seared_steak = array
	(
		array("steak", 200),
		array("spinach", 140),
		array("olive oil", 20),
		array("red onion", 50),
		array("garlic clove", 6),
		array("tomato", 400),
		array("celery", 30),
		array("pepper", 50),
		array("olive", 25),
		array("caper", 15),
		array("oregano", 5),
		array("balsamic vinegar", 5)
	);
	
$ingredients_teriyaki_chicken = array
	(
		array("chicken breast", 200),
		array("teriyaki sauce", 45),
		array("corn", 200),
		array("garlic clove", 3),
		array("red pepper flake", 1),
		array("bok choy", 200),
		array("soy sauce", 5),
		array("chicken broth", 120),
		array("zucchini", 360)
	);

$ingredients_thyme_beet = array
	(
		array("beet", 460),
		array("olive oil", 15),
		array("garlic clove", 3),
		array("shallot", 30),
		array("thyme", 2),
		array("vegetable broth", 59),
		array("walnut", 79),
		array("parmesan cheese", 59)
	);

$ingredients_vegan_zucchini = array
	(
		array("spinach", 297),
		array("olive oil", 15),
		array("carrot", 70),
		array("white onion", 25),
		array("shiitake mushroom", 98),
		array("zucchini", 300),
		array("sesame seed", 3),
		array("sesame oil", 15),
		array("honey", 10),
		array("soy sauce", 30)
	);

$ingredients_warm_chorizo = array
	(
		array("chorizo", 280),
		array("red pepper", 200),
		array("chickpea", 400),
		array("dried tomato", 60),
		array("balsamic vinegar", 15),
		array("rucola", 100)
	);

$ingredients_zucchini_spaghetti = array
	(
		array("cauliflower", 400),
		array("olive oil", 30),
		array("garlic powder", 1),
		array("garlic clove", 6),
		array("shallot", 27),
		array("prosciutto", 200),
		array("red pepper flake", 1),
		array("zucchini", 600),
		array("parsley", 7),
		array("lemon zest", 1),
		array("lemon juice", 8),
		array("greek yogurt", 59),
		array("parmesan cheese", 22)
	);

// Recipe name / filename array

$recipe_list = array("basil_pomodoro", "butternut_squash", "daikon_noodles", "egg_rocket", "chicken_cacciatore", "paillard_chicken", "pisto_huevos", "beet_noodles", "seared_steak", "teriyaki_chicken", "thyme_beet", "vegan_zucchini", "warm_chorizo", "zucchini_spaghetti");

// Recipe text descriptions

$recipe_texts = array
	(
		"<ul>
    	<li>Serves 2</li>
		</ul>
		<p>Ingredients</p>
		<ul>
		<li>1 tablespoon extra virgin olive oil</li>
		<li>1/2 pound boneless chicken breasts, roughly cubed</li>
		<li>salt and pepper, to taste</li>
		<li>1/4 teaspoon garlic powder</li>
		<li>1 large clove of garlic, minced</li>
		<li>1/3 cup diced white onions</li>
		<li>1 14oz can diced tomatoes (or crushed tomatoes) with juices
		1-1.5 tablespoon chopped basil</li>
		<li>2 medium zucchinis, Blade C, noodles trimmed</li>
		</ul>
		<p>Instructions</p>
		<ul>
		<li>Place a pot/saucepan over medium heat and add in the olive oil. Once the oil heats, 
		add in the chicken. Season with salt, pepper and garlic powder. Cook for 3 minutes and 
		then flip over, cooking another 3-5 minutes or until chicken is cooked through and no 
		longer pink on the inside.</li>
		<li>Then, add in the garlic and onions and cook for 2-3 minutes or until onions start to 
		soften and become translucent. Then, add in the canned tomatoes and roughly crush the 
		tomatoes with a potato masher or the back of a fork. Bring to a boil and then reduce heat
		and simmer. Season with salt and pepper and let cook for 5 minutes, add in the basil and
		cook for another 5-10 minutes or until most of the liquid has evaporated and it is thicker,
		suitable for cooking with zucchini noodles. Add in the zucchini noodles and toss for 
		2-3 minutes or until noodles are al dente.</li>
		<li>Divide into bowls.</li>
		</ul>"
,
		"<ul>
    	<li>Serves 3-4</li>
		</ul>
		<p>Ingredients</p>
		<ul>
		<li>For the noodles:</li>
		<li>1 medium butternut squash, peeled </li>
		<li>½ tablespoon extra virgin olive oil</li>
		<li>¼ teaspoon garlic powder</li>
		<li>salt and pepper, to taste</li>
		<li>For the rest:</li>
		<li>½ cup roughly chopped walnuts</li>
		<li>1 cup of brussels sprouts</li>
		<li>2 tablespoons extra virgin olive oil</li>
		<li>1 medium red onion, sliced thinly</li>
		<li>1 large garlic clove, minced</li>
		<li>¼ teaspoon red pepper flakes</li>
		<li>salt and pepper, to taste</li>
		<li>optional: ¼ cup grated parmesan cheese</li>
		</ul>
		<p>Instructions</p>
		<ul>
		<li>1.Preheat the oven to 400 degrees. Spread the butternut squash noodles out 
		on a baking sheet, drizzle with olive oil and season with garlic powder, salt and pepper.
		Line another baking tray with parchment paper and place the walnuts. Bake the butternut
		squash noodles alongside the walnuts, baking the walnuts for just 5 minutes and baking the 
		noodles for 8-10 minutes or until al dente, tossing halfway through.</li>
		<li>2.While the butternut squash is baking, shred the brussels sprouts. Chop the bottoms off
		and peel off the outer leaves, if tough and discolored. Slice them in half and then slice 
		thinly lengthwise. Set aside.</li>
		<li>Place a large skillet over medium heat and add in the olive oil. Once oil is shimmering, 
		add in the garlic, red pepper flakes and onion and lower heat to medium-low and cook the onion,
		stirring occasionally, until onion is translucent and mainly wilted, about 3 minutes.
		Add in the brussels sprouts and season with salt and pepper. Cover and cook the brussels sprouts, 
		still on medium low heat, uncovering occasionally to stir, or until lightly browned and cooked 
		(about 3-5 minutes). Take the skillet off the heat and add the parmesan (if adding) and then fold
		in the walnuts, stir, and pour into a large mixing bowl along with the butternut squash noodles.
		Toss to combine and serve.</li>
		</ul>"
,
		"<ul>
    	<li>Serves 4</li>
		</ul>
		<p>Ingredients</p>
		<ul>
		<li>For the meatballs:</li>
		<li>1 pound lean ground pork</li>
		<li>1 teaspoon peeled and minced ginger</li>
		<li>1/3 cup chopped scallions</li>
		<li>1 tablespoon soy sauce (or tamari, if you’re gluten free)</li>
		<li>1 teaspoon finely minced garlic</li>
		<li>3 teaspoons chopped cilantro</li>
		<li>salt and pepper, to taste</li>
		<li>For the soup:</li>
		<li>1 teaspoon sesame oil</li>
		<li>1 tablespoon peeled and minced ginger</li>
		<li>2 bunches broccolini, halved (make sure to cut off any rough ends on the stems)</li>
		<li>pepper, to taste</li>
		<li>4 cups chicken broth</li>
		<li>2 cups water</li>
		<li>1 tablespoon soy sauce (or tamari, if you’re gluten free)</li>
		<li>1 tablespoon fish sauce</li>
		<li>2 teaspoons chili sauce or sriracha</li>
		<li>3 medium daikon radishes, peeled, Blade C, noodles trimmed</li>
		<li>½ cup cilantro leaves</li>
		</ul>
		<p>Instructions</p>
		<ul>
		<li>Preheat the oven to 400 degrees and line a baking sheet with parchment paper.</li>
		<li>Place all of the ingredients for the meatballs into a large bowl and mix together. Form 10-12 golf ball sized meatballs with hands and place on the parchment paper. Bake until cooked through, about 18 minutes.</li>
	 	<li>Once you place the meatballs in the oven to bake, place a large saucepan over medium heat and add in the sesame oil. Once oil heats, add in the ginger, cooking for 30 seconds or until fragrant. Add in the broccolini, season with pepper and cook for 3-5 minutes or until it turns bright green. Add in the chicken broth, water, soy sauce, fish sauce and chili sauce. Cover and bring to a boil and then uncover, lower heat and simmer for 10 minutes until broccolini is crisp-tender. Then, add in the daikon noodles and cook for 3-5 minutes or until noodles are to your preference (if you like al dente, no more than 3 minutes, if you like
        softer, go up to 5 minutes.)</li>
		<li>Portion the soup into bowls, top with 3 golf ball sized meatballs. Garnish with cilantro and serve immediately.</li>
		</ul>"
,
		"<ul>
    	<li>Serves 2</li>
		</ul>
		<p>Ingredients</p>
		<ul>
		<li>2 seeded wraps</li>
		<li>a little olive oil, for brushing</li>
		<li>1 roasted red pepper, from a jar</li>
		<li>2 tomatoes</li>
		<li>2 tbsp tomato purée</li>
		<li>1 tbsp chopped dill</li>
		<li>2 tbsp chopped parsley</li>
		<li>2 eggs</li>
		<li>65g pack rocket</li>
		<li>½ red onion, very thinly sliced</li>    
		</ul>
		<p>Instructions</p>
		<ul>
		<li>Heat oven to 200C/180C fan/gas 6. Lay the tortillas on two baking sheets, brush sparingly with the oil then bake for 3 mins. Meanwhile chop the pepper and tomatoes and mix with the tomato purée, seasoning and herbs. Turn the tortillas over and spread with the tomato mixture, leaving the centre free from any large pieces of pepper or tomato.  </li>
		<li>Break an egg into the centre then return to the oven for 10 mins or until the egg is just set and the tortilla is crispy round the edges. Serve scattered with the rocket and onion.  </li>
		</ul>"
,
		"<ul>
    	<li>Serves 4</li>   
    	<li>65 minTotal Time</li>
    	<li>calories 262 per serving</li>
		</ul>
		<p>Ingredients</p>
		<ul>
    	<li>1 tbsp olive oil</li>
    	<li>3 slices prosciutto, fat removed, chopped</li>
    	<li>1 medium onion, chopped</li>
		<li>2 garlic cloves, finely chopped</li>
		<li>2 sage sprigs</li>
		<li>2 rosemary sprigs</li>
		<li>4 skinless chicken breasts (550g total weight), preferably organic</li>
		<li>150ml dry white wine</li>
		<li>400g can plum tomatoes in natural juice</li>
		<li>1 tbsp tomato purée</li>
		<li>225g chestnut mushrooms, quartered or halved if large</li>
		<li>small handful chopped flat-leaf parsley, to serve</li>
		</ul>
		<p>Instructions</p>
		<ul>
		<li>1.Heat the oil in a large non-stick frying pan. Tip in the prosciutto and fry for about 2 mins until crisp. Remove with a slotted spoon, letting any fat drain back into the pan, and set aside. Put the onion, garlic and herbs in the pan and fry for 3-4 mins.</li>
		<li>2.Spread the onion out in the pan, then lay the chicken breasts on top. Season with pepper and fry for 5 mins over a medium heat, turning the chicken once, until starting to brown on both sides and the onion is caramelising on the bottom of the pan. Remove the chicken and set aside on a plate. Raise the heat, give it a quick stir and, when sizzling, pour in the wine and let it bubble for 2 mins to reduce slightly. </li>
		<li>3.Lower the heat to medium, return the prosciutto to the pan, then stir in the tomatoes (breaking them up with your spoon), tomato purée and mushrooms. Spoon 4 tbsp of water into the empty tomato can, swirl it around, then pour it into the pan. Cover and simmer for 15-20 mins or until the sauce has thickened and reduced slightly, then return the chicken to the pan and cook, uncovered, for about 15 mins or until the chicken is cooked through. Season and scatter over the parsley to serve.  </li>
		</ul>"
,
		"<ul>
		<li>Serves 6</li>   
		</ul>
		<p>Ingredients</p>
		<ul>
		<li>6 skinless chicken breasts</li>
		<li>2 tbsp olive oil</li>
		<li>1⁄2 tbsp balsamic vinegar</li>
		<li>140g bag rocket</li>
		<li>25g Parmesan</li>
		<li>lemon wedges</li>
		<li>For the marinade</li>
		<li>2 garlic cloves</li>
		<li>3 rosemary sprigs, leaves finely chopped</li>
		<li>6 sage leaves, finely shredded</li>
		<li>zest 1 lemon and juice of ½</li>
		<li>3 tbsp olive oil</li>
		</ul>
		<p>Instructions</p>
		<ul>
		<li>1.Place each chicken breast between 2 sheets of cling film or baking parchment. Use a meat mallet or rolling pin to bash each piece of chicken – flatten out to an even layer about 0.5cm thick. Transfer to a dish.  </li>
		<li>2.To make the marinade, crush the garlic with a good pinch of salt using a pestle and mortar. Add the rosemary and sage, and give everything a good pounding. Stir through the lemon zest and juice, olive oil and some ground black pepper. Pour the marinade over the chicken, ensuring that it’s well coated. Cover and chill for at least 2 hrs.  </li>
		<li>3.Heat the barbecue. Once the flames have died down, spread the coals out to an even layer. Cook the chicken for 1-2 mins each side. Transfer to a board and leave to rest for a few mins.  </li>
		<li>4.Meanwhile, pour the oil and balsamic vinegar into a large bowl. Add the rocket and some seasoning. Toss together, then shave over the Parmesan. Serve the salad with the chicken, with lemon wedges to squeeze over.  </li>
		</ul>"
,
		"<ul>
    	<li>Serves 4</li>   
    	<li>80 minTotal Time</li>
    	<li>calories 280 per serving</li>
		</ul>
		<p>Ingredients</p>
		<ul>
		<li>2 tbsp olive oil</li>
		<li>2 onions, finely chopped</li>
		<li>4 garlic cloves, finely chopped</li>
		<li>5 mixed peppers, chopped into chunks</li>
		<li>1 heaped tsp dried oregano</li>
		<li>a few thyme sprigs, leaves picked</li>
		<li>4 bay leaves</li>
		<li>2 courgettes, chopped into chunks</li>
		<li>1 aubergine, chopped into chunks</li>
		<li>4 large tomatoes, roughly chopped</li>
		<li>4 large eggs</li>
		<li>½ small pack parsley, leaves roughly chopped</li>
		</ul>
		<p>Instructions</p>
		<ul>
		<li>1.Heat the oil in a large flameproof casserole dish or a cast-iron skillet over a low heat. Add the onions and a sprinkle of salt, cover and cook gently for 15 mins, stirring occasionally. Add the garlic and cook for another 2 mins.  </li>
		<li>2.Next, throw in the peppers and cook over a medium heat, covered, for about 5 mins, stirring every so often, until the peppers are just tender.  </li>
		<li>3.Mix in the oregano, thyme, bay leaves, some black pepper and a little salt, if needed. Tip in the courgettes and aubergine, combine thoroughly, and cook over a medium heat, covered, for 10 mins. Stir in the tomatoes, cover and cook for 20 mins, stirring occasionally.  </li>
		<li>4.Carefully crack the eggs over the pisto – try not to break the yolks. Cook in the sauce on a medium heat for 5-6 mins until the eggs are cooked through but still a little soft, then scatter with parsley before serving  </li>
		</ul>"
,
		"<ul>
    	<li>Serves 1</li>
		</ul>
		<p>Ingredients</p>
		<ul>
    	<li>2 medium beets, peeled, Blade C, noodles trimmed
        olive oil cooking spray</li>
		<li>2 cups baby kale</li>
		<li>For the pesto:</li>
		<li>3 cup basil leaves, packed</li>
		<li>¼ cup of pinenuts</li>
		<li>¼ cup of olive oil</li>
		<li>½ tsp grinded sea salt</li>
		<li>¼ tsp grinded pepper</li>
		<li>1 large clove of garlic, minced</li>
		</ul>
		<p>Instructions</p>
		<ul>
		<li>Set the oven to 425 degrees. On a baking sheet, spread out the beet noodles and coat with 
		cooking spray and season with salt and pepper. Bake for 5-10 minutes or until beets are cooked 
		to al dente or your preference in doneness.</li>
		<li>While the noodles cook, combine all of the ingredients for the pesto into a food processor
		and pulse until creamy. Taste and adjust, if needed.
		Once beets are cooked, toss with pesto and the kale.</li>
		<li>Serve.</li>
		</ul>"
,
		"<ul>
		<li>Serves 2</li>   
		<li>10 minTotal Time</li>
		<li>calories 269 per serving</li>
		</ul>
		<p>Ingredients</p>
		<ul>
		<li>200g extra-lean fillet steak</li>
		<li>140g fresh spinach</li>
		<li>For the caponata</li>
		<li>1-cal oil spray</li>
		<li>1 red onion, halved and sliced</li>
		<li>2 garlic clove, cut into slivers</li>
		<li>400g can chopped tomato</li>
		<li>2 celery sticks, sliced</li>
		<li>1 orange pepper, deseeded, quartered and sliced</li>
		<li>25g pitted black kalamata olive, halved (about 8)</li>
		<li>1 tbsp caper</li>
		<li>½ tsp dried oregano or 1 tbsp fresh</li>
		<li>1 tsp balsamic vinegar</li>
		</ul>
		<p>Instructions</p>
		<ul>
		<li>1.For the caponata, spray a large, wide non-stick pan with 3 sprays of oil, and add the onion and garlic. Cover and cook for 5 mins, stirring halfway through to brown them.  </li>
		<li>2.Tip in the tomatoes and a can of water, then stir in all the other caponata ingredients. Cover the pan and leave to simmer for 30 mins.  </li>
		<li>3.Heat a griddle or small non-stick frying pan. Generously grind black pepper over the steak and sear on both sides, about 6 mins in total, until cooked to your liking. Allow to rest while you wilt the spinach in a covered pan on a low heat.  </li>
		<li>4.Spoon the caponata onto 2 serving plates, top with the spinach, then slice the beef and arrange on top.  </li>
		</ul>"
,
		"<ul>
		<li>Serves 2</li>
		<li>25 minTotal Time</li>
		<li>calories 211 per serving</li>
		</ul>
		<p>Ingredients</p>
		<ul>
		<li>3/4 cup cubed chicken breast</li>
		<li>2-3 tbsp favorite teriyaki sauce (I use Annie Chun's)</li>
		<li>1 ear of corn</li>
		<li>1 large garlic clove, minced</li>
		<li>1 pinch red pepper flakes</li>
		<li>2 bunches of baby bok choy, bottom tough stems remove</li>
		<li>1 tsp low-sodium soy sauce</li>
		<li>1/2 cup chicken broth</li>
		<li>2 medium zucchinis, Blade C</li>
		</ul>
		<p>Instructions</p>
		<ul>
		<li>Preheat the oven to 375 degrees. Place your chicken on a baking tray and pour over with teriyaki sauce. Mix together so that the chicken is covered. Let marinade while oven preheats. Once oven preheats, bake for 15-17 minutes or until chicken is cooked through.</li>
		<li>While the chicken is marinading, cover your corn with water in a medium saucepan. Lightly salt the water and cover, bringing to a boil. Cook for another 2 minutes once boiled and then set aside to strain in a colander.</li>
		<li>Place a large skillet over medium heat and coat with cooking spray. Once the skillet warms, add in the garlic and red pepper flakes. Let cook for 30 seconds and then add in the bok choy. Toss to combine and let cook for about 2 minutes or until bok choy begins to wilt. Then, shave off the kernels of the corn with a knife into	the skillet. Then, add in the soy sauce and chicken broth.</li>
		<li>Let reduce for about 3-5 minutes or until most of the liquid is gone. Then, add in the zucchini noodles. Toss to combine and let cook for 2-3 minutes, tossing frequently, or until noodles have softened to your preference. Remove from heat, place in the cooked chicken, toss to combine and then divide into bowls. Enjoy!</li>
		</ul>"
,
		"<ul>
		<li>Serves 1</li>   
		<li>25 minTotal Time</li>
		<li>calories 272 per serving</li>
		</ul>
		<p>Ingredients</p>
		<ul>
		<li>2 large beets, peeled, Blade C</li>
		<li>1 tablespoon extra virgin olive oil</li>
		<li>1 clove of garlic, minced</li>
		<li>2 tablespoons minced shallots</li>
		<li>salt and pepper, to taste</li>
		<li>1 teaspoon fresh thyme leaves</li>
		<li>1/4 cup vegetable broth</li>
		<li>1/3 cup roughly chopped walnuts</li>
		<li>1/4 cup grated parmesan cheese</li>
		</ul>
		<p>Instructions
		<ul>
		<li>Place the beet noodles into a food processor and pulse until rice-like. Be careful not to over-pulse, so go slowly.</li>
		<li>Heat the olive oil in a large skillet over medium-heat. Once heated, add in the garlic and shallots. Let cook for 30 seconds or until fragrant and then add in the beets. Season the beets with salt, pepper and add in the thyme.</li>
		<li>Stir to combine and add in the vegetable broth. Bring to a boil and then lower to a simmer. Let cook for 5-7 minutes or until beets soften. Once softened, remove from heat, stir in the parmesan cheese and walnuts and stir until cheese melts into the risotto.</li>
		<li>Serve immediately.</li>
		</ul>"
,
		"<ul>
		<li>Serves 1</li>   
		<li>25 minTotal Time</li>
		<li>calories 205 per serving</li>
		</ul>
		<p>Ingredients</p>
		<ul>
		<li>2.5 packed cups spinach</li>
		<li>1 tablespoon extra virgin olive oil (or oil of choice)</li>
		<li>1 carrot, peeled, cut into matchsticks and halved</li>
		<li>½ white onion, thinly sliced</li>
		<li>1 3.5oz container shiitake mushrooms, stems removed, tops sliced into ½” pieces</li>
		<li>1 large zucchini (or 2 medium), Blade C</li>
		<li>toasted sesame seeds, to garnish (about ¼ tsp)</li>
		<li>For the sauce:</li>
		<li>1 tablespoon sesame oil</li>
		<li>2 teaspoon honey</li>
		<li>2 tablespoons soy sauce</li>
		<li>½ teaspoon toasted sesame seeds</li>
		</ul>
		<p>Instructions</p>
		<ul>
		<li>Bring a small pot to a boil. While waiting to boil, combine all ingredients for the sauce, whisk together and set aside. Once water boils, add in the spinach for 30 seconds or until wilted and then transfer with a slotted spoon to a plate and gently squeeze out excess water. Set aside.</li>
		<li>Heat a large skillet over medium-heat and once heated, add in the olive oil. Once oil heats, add in the onion, carrots and shiitake mushrooms and cover and cook for 5-7 minutes or until mushrooms are wilted and carrots have mostly softened.</li>
		<li>Add in the zucchini noodles and toss for 2-3 minutes or until zucchini is cooked to al dente. Pour the noodle mixture into a colander and toss to let excess moisture drain out. Place the drained noodle mixture back into the skillet.</li>
		<li>Add in the spinach and pour in the sauce. Toss to combine all the flavors and warm the sauce, about 1 minute. Transfer to plates and garnish with sesame seeds.</li>
		</ul>"
,
		"<ul>
		<li>Serves 4</li>   
		<li>25 minTotal Time</li>
		<li>calories 354 per serving</li>
		</ul>
		<p>Ingredients</p>
		<ul>
    	<li>280g pack cooking chorizo, sliced</li>
		<li>280g pack cooking chorizo, sliced</li>
		<li>2 red peppers, deseeded and cut into strips</li>
		<li>400g can chickpeas, drained and rinsed</li>
		<li>12 semi-dried tomatoes</li>
		<li>1 tbsp red wine vinegar</li>
		<li>100g bag rocket, to serve</li>    
		</ul>
		<p>Instructions</p>
		<ul>
		<li>In a large frying pan, dry-fry the chorizo until golden for about 10 mins, then use a slotted spoon to scoop it from the pan and set aside. </li>
		<li>Add the onion and peppers to the pan and soften in the chorizo fat for 10 mins. Stir in the chickpeas and tomatoes, warming through  </li>
		<li>Pour in the red wine vinegar and season. Serve in bowls with handfuls of rocket on top.  </li>
		</ul>"
,
		"<ul>
		<li>Serves 2-3</li>   
		<li>30 minTotal Time</li>
		<li>calories 257 per serving</li>
		</ul>
		<p>Ingredients</p>
		<ul>
		<li>2 cups cauliflower florets</li>
		<li>1 tablespoon extra virgin olive oil</li>
		<li>1/4 teaspoon garlic powder</li>
		<li>salt and pepper, to taste</li>
		<li>2 garlic cloves</li>
		<li>1 large shallot</li>
		<li>olive oil cooking spray</li>
		<li>4 pieces of prosciutto</li>
		<li>1 tablespoon extra virgin olive oil</li>
		<li>1 pinch red pepper flakes</li>
		<li>2 medium zucchinis</li>
		<li>1 tablespoon minced parsley, to garnish</li>
		<li>For the lemon dressing:</li>
		<li>1/4 teaspoon lemon zest</li>
		<li>1.5 teaspoons lemon juice</li>
		<li>1/4 cup plain non-fat Greek yogurt</li>
		<li>1.5 tablespoons grated Parmesan cheese</li>
		<li>salt and pepper, to taste</li>
		</ul>
		<p>Instructions</p>
		<ul>
		<li>Preheat the oven to 450 degrees. Line a baking tray with parchment paper and set aside.
		<li>Toss the cauliflower in a medium bowl with the olive oil, garlic powder and season with salt and pepper. Lay the cauliflower out on the prepared baking tray and roast for 20 minutes or until easily pierced with a fork and lightly browned.</li>
		<li>While the cauliflower is roasting, combine all of the ingredients for the lemon dressing and set aside. Mince the garlic and shallot and set aside. Spiralize the zucchini, using	Blade C and trim the noodles.</li>
		<li>Place a large skillet over medium heat and coat with cooking spray. Lay in the prosciutto slices and cook for 3-5 minutes or until crispy. Transfer to a paper towel lined plate and set aside.</li>
		<li>Allow the skillet to cool down for at least 2 minutes and then place the skillet back over medium heat and add in the olive oil. Once oil heats, add in the garlic, shallots and red pepper flakes. Cook for 30 seconds or until fragrant and then add in the zucchini noodles.</li>
		<li>Cook, tossing frequently, for 3-5 minutes or until zucchini noodles are al dente. Add in the cauliflower and crumble the prosciutto over the skillet, with your fingers. Give a toss and then remove from heat and stir in the Greek yogurt mixture. Toss to combine thoroughly and divide into bowls. Sprinkle with parsley, to garnish.</li>
		</ul>"
	);

// Instantiate all recipe objects

$basil_pomodoro = new Recipe(1, "Basil Pomodoro Zucchini Pasta with Chicken", false, $ingredients_basil_pomodoro, 32, 30, $recipe_list[0], $recipe_texts[0]);

$butternut_squash = new Recipe(2, "Butternut Squash Noodles with Shredded Brussels Sprouts, Walnuts and Caramelized Onions", true, $ingredients_butternut_squash, 60, 30, $recipe_list[1], $recipe_texts[1]);

$daikon_noodles = new Recipe(3, "Daikon Noodles and Broccolini with Asian Pork Meatballs", false, $ingredients_daikon_noodles, 124, 35, $recipe_list[2], $recipe_texts[2]);

$egg_rocket = new Recipe(4, "Egg & Rocket Pizzas", true, $ingredients_egg_rocket, 23, 65, $recipe_list[3], $recipe_texts[3]);

$chicken_cacciatore = new Recipe(5, "Lighter chicken cacciatore", false, $ingredients_chicken_cacciatore, 62, 20, $recipe_list[4], $recipe_texts[4]);

$paillard_chicken = new Recipe(6, "Paillard of chicken with lemon & herbs", false, $ingredients_paillard_chicken, 66, 45, $recipe_list[5], $recipe_texts[5]);

$pisto_huevos = new Recipe(7, "Pisto con huevos", false, $ingredients_pisto_huevos, 48, 80, $recipe_list[6], $recipe_texts[6]);

$beet_noodles = new Recipe(8, "Roasted beet noodles with pesto and baby kale", true, $ingredients_beet_noodles, 16, 25, $recipe_list[7], $recipe_texts[7]);

$seared_steak = new Recipe(9, "Seared stea with celery & pepper caponata", false, $ingredients_seared_steak, 75, 10, $recipe_list[8], $recipe_texts[8]);

$teriyaki_chicken = new Recipe(10, "Teriyaki chicken, bok choy and corn chorizo noodles", false, $ingredients_teriyaki_chicken, 26, 25, $recipe_list[9], $recipe_texts[9]);

$thyme_beet = new Recipe(11, "Thyme beet risotto with walnuts", true, $ingredients_thyme_beet, 11, 25, $recipe_list[10], $recipe_texts[10]);

$vegan_zucchini = new Recipe(12, "Vegan zucchini noodle japchae", true, $ingredients_vegan_zucchini, 23, 25, $recipe_list[11], $recipe_texts[11]);

$warm_chorizo = new Recipe(13, "Warm chorizo & chickpea salad", false, $ingredients_warm_chorizo, 65, 25, $recipe_list[12], $recipe_texts[12]);

$zucchini_spaghetti = new Recipe(14, "Zucchini spaghetti, crispy prosciutto and roasted cauliflower with lemon-parmesan sauce", false, $ingredients_zucchini_spaghetti, 37, 30, $recipe_list[13], $recipe_texts[13]);

$recipe_objects = array($basil_pomodoro, $butternut_squash, $daikon_noodles, $egg_rocket, $chicken_cacciatore, $paillard_chicken, $pisto_huevos, $beet_noodles, $seared_steak, $teriyaki_chicken, $thyme_beet, $vegan_zucchini, $warm_chorizo, $zucchini_spaghetti);

?>