const SHOW_INDEX_DELAY = 1000;
const SHOW_INDEX_TRANSITION = 500;

const searchParams = new URLSearchParams(window.location.search);

const USERNAME = searchParams.get('username') ?? 'Gabriel';

export { SHOW_INDEX_DELAY, SHOW_INDEX_TRANSITION, USERNAME };
