from flask import Flask, render_template, request
import requests
import locale
from datetime import datetime

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/forecast', methods=['POST'])
def forecast():
    country = request.form.get('country')
    city = request.form.get('city')

    api_key = 'f1a4ac8ec5794557b74100930232609'  

    url = f'http://api.weatherapi.com/v1/forecast.json?key={api_key}&q={city},{country}&days=3'
    print(f"{url}")

    response = requests.get(url)
    data = response.json()
    # Dit code is bedoeld om de tekst van Engels naar Nederlands te zetten .
    locale.setlocale(locale.LC_TIME, 'nl_NL.UTF-8')

    forecast_days = data['forecast']['forecastday']

    # Een lus om door de forecast_days te lopen en dan bepaalen welke dag het vandaag is.
    for day in forecast_days:
        date_str = day['date']
        date_obj = datetime.strptime(date_str, '%Y-%m-%d')
        day_of_week = date_obj.strftime('%A')
        day['day_of_week'] = day_of_week

    # sunrise, sunset
    sunrise = data['forecast']['forecastday'][0] ['astro']['sunrise']
    sunset = data['forecast']['forecastday'][0] ['astro']['sunset']

    return render_template('forecast.html', country=country, city=city, forecast_days=forecast_days, sunrise=sunrise, sunset=sunset)

if __name__ == '__main__':
    app.run(debug=True)
