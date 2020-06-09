export default function filter() {
  const filter = document.querySelector('.filter form');
  const nome = document.querySelector('#nome');
  const marca = document.querySelector('#marca');
  const modelo = document.querySelector('#modelo');
  const ano = document.querySelector('#ano');
  const valor = document.querySelector('#valor');

  if (!filter) return null;

  filter.addEventListener('submit', (e) => {
    e.preventDefault();

    const between = (preco) => {
      const value = (475000 * preco) / 100 + 25000;

      return value;
    };

    const submitJson = {
      nome: nome.value,
      marca: marca.value,
      modelo: modelo.value,
      ano: ano.value,
      valor: between(valor.value),
    };

    window.location.href = `${baseURL}/seminovos/?nome=${submitJson.nome}&marca=${submitJson.marca}&modelo=${submitJson.modelo}&ano=${submitJson.ano}&valor=${submitJson.valor}`;
  });
}
