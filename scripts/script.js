const pokedex = document.getElementById("pokedex");

/* Método para receber os dados dos pokemons através da API */
const valores = [];
for(let i = 1; i <= 150; i++){
	const url = `https://pokeapi.co/api/v2/pokemon/${i}`;
	valores.push(fetch(url).then((res) => res.json()));

}

Promise.all(valores).then((results) => {
	const pokemon = results.map((data) => ({
		name: data.name,
		id: data.id,
		image: data.sprites['front_default'],
		type: data.types.map((type) => type.type.name).join(', ')
	}));
	displayPokemonList(pokemon);
});

const displayPokemonList = (pokemon) => {
	const pokedexHTML = pokemon.map((poke) => `
	<div class = "pokedex">
		<div class="exterior-moldura">
			<div class="button-ext-moldura">
			</div>
			<div class="button-ext-moldura-2">
			</div>
			<li class="moldura"/>
				<img class="imagem-pokemon" src="${poke.image}"/>
			</li>
			<div class="botao-imagem">
			</div>
		</div>
		<div class = "externo-id">
			<div class ="moldura-id">
				<h2 class="titulo-pokemon"><a>${poke.id}</a></h2>
			</div>
		</div>
		<a><h2 class="nome-pokemon">${poke.name}</h2></a>
		<p class="legenda-pokemon">Tipo: ${poke.type}</p>
		<div class="botao-legenda-1">
		</div>
		<div class="botao-legenda-2">
		</div>
		<div class="botao-pokedex">
		<div class="direcional-pokedex">
			<img src="../images/direcional.png">
		</div>
		
		</div>
	</div>
	`
	).join("");
	pokedex.innerHTML = pokedexHTML;

};


/* Fim do método */