import telebot

bot = telebot.TeleBot('your_bot_token_here')

@bot.message_handler(commands=['start', 'help'])
def send_welcome(message):
    bot.reply_to(message, "Привет, я бот! Отправь 'цц'")

@bot.message_handler(func=lambda message: True)
def echo_all(message):
    if message.text == 'цц':
        response_text = '<b>йй в html</b>'
        bot.send_message(message.chat.id, response_text, parse_mode='HTML')

bot.polling()
