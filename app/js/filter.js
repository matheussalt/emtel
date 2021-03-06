export default function filter() {
  const filter = document.querySelector('.filter form');
  const nome = document.querySelector('#nome');
  const marca = document.querySelector('#marca');
  const modelo = document.querySelector('#modelo');
  const ano = document.querySelector('#ano');
  const valor = document.querySelector('#valor');
  const minValue = document.querySelector(
    '.control-values span:nth-of-type(1)'
  );
  const maxValue = document.querySelector(
    '.control-values span:nth-of-type(2)'
  );
  let changedValue = false;

  if (!filter) return null;

  valor.addEventListener('input', (e) => {
    changedValue = true;
    const value = (475000 * e.target.value) / 100 + 25000;

    const min = new Intl.NumberFormat('pt-BR', {
      style: 'currency',
      currency: 'BRL',
    }).format(value - 10000);

    const max = new Intl.NumberFormat('pt-BR', {
      style: 'currency',
      currency: 'BRL',
    }).format(value + 10000);

    minValue.innerText = min;
    maxValue.innerText = max;
  });

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
      valor: changedValue ? between(valor.value) : '',
    };

    window.location.href = `${baseURL}/seminovos/?nome=${submitJson.nome}&marca=${submitJson.marca}&modelo=${submitJson.modelo}&ano=${submitJson.ano}&valor=${submitJson.valor}`;
  });
}
