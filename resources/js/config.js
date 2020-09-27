/*
    Defines the API route we are using.
*/
var api_url = '';

switch( process.env.NODE_ENV ){
  case 'development':
    api_url = process.env.MIX_APP_URL + '/api/v1';
  break;
  case 'production':
    api_url = 'https://roastandbrew.coffee/api/v1';
  break;
}

export const APP_CONFIG = {
  API_URL: api_url,
}
