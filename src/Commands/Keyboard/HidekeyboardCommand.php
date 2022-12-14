<?php

    /**
     * This file is part of the Telegram Bot CodeIgniter 4 package.
     * https://github.com/KS7ven/TelegramBot-ci4
     *
     * (c) KSeven and PHP Telegram Bot Team
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */

    namespace BotTelegram\Commands\Keyboard;

    /**
     * User "/hidekeyboard" command
     *
     * Command to hide the keyboard.
     */

    use Longman\TelegramBot\Commands\UserCommand;
    use Longman\TelegramBot\Entities\Keyboard;
    use Longman\TelegramBot\Entities\ServerResponse;
    use Longman\TelegramBot\Exception\TelegramException;

    class HidekeyboardCommand extends UserCommand
    {
        /**
         * @var string
         */
        protected $name = 'hidekeyboard';

        /**
         * @var string
         */
        protected $description = 'Hide the custom keyboard';

        /**
         * @var string
         */
        protected $usage = '/hidekeyboard';

        /**
         * @var string
         */
        protected $version = '0.2.0';

        /**
         * Main command execution
         *
         * @return ServerResponse
         * @throws TelegramException
         */
        public function execute(): ServerResponse
        {
            // Remove the keyboard and send a message
            return $this->replyToChat('Keyboard Hidden', [
                'reply_markup' => Keyboard::remove(),
            ]);
        }
    }
