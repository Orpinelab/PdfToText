<?php
namespace orpine\pdftotext\Exceptions;

use Symfony\Component\Process\Exception\ProcessFailedException;

class CouldNotExtractText extends ProcessFailedException
{
}