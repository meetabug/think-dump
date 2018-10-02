<?php
use think\Console;
use Meetabug\PrintVersion;
Console::init(false)->add(new PrintVersion);
