<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ConvertTemperatureCommand extends Command
{
	protected $signature = "covert-temperature {temperature}";

	protected $description = "Converts a temperature from Fahrenheit to Celcius";

	public function handle()
	{
	}
}