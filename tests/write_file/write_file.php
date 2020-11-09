<?php 

class Write_file
{
	//caminho do arquivo
	private string $way;

	/* contructor recebe o nome do arquivo*/
	public function __construct(string $way)
	{
		$this->way = $way;
	}

	/*função escrita no arquivo, escreve o conteúdo e salta uma linha */
	public function write(string $content)
	{
		file_put_contents($this->way, $content . PHP_EOL, FILE_APPEND);
	}
}