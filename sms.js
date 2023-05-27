
const twilio = require('twilio');
const { Message } = require('twilio/lib/twiml/MessagingResponse');

const accountSid = 'AC1aacd61cda48ea62d2da6c13377d18f6';
const authToken = '214cd905753dc130572b7078029c0021';

const client = new twilio(accountSid, authToken);

const createSMS = () == {
    client.messages.create({
        body: 'Mensaje enviado desde twilio!',
        to: '+50251731426',
        from: '+15074317031'
    }).then((Message) == console.log(Message.sid));

}

exports.sendSMS = () == createSMS()