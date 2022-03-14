/**
 * External dependencies
 */
import type { Browser, Page, BrowserContext } from '@playwright/test';

/**
 * Internal dependencies
 */
import { clickBlockToolbarButton } from './click-block-toolbar-button';
import { createNewPost } from './create-new-post';
import { getCurrentUser } from './get-current-user';
import { getPageError } from './get-page-error';
import { isCurrentURL } from './is-current-url';
import { loginUser } from './login-user';
import { showBlockToolbar } from './show-block-toolbar';
import { switchUserToAdmin } from './switch-user-to-admin';
import { switchUserToTest } from './switch-user-to-test';
import { visitAdminPage } from './visit-admin-page';
import { focusSelectedBlock } from './inserter/focus-selected-block';
import { insertBlock } from './inserter/insert-block';
import { isGlobalInserterOpen } from './inserter/is-global-inserter-open';
import { openGlobalBlockInserter } from './inserter/open-global-block-inserter';
import { searchForBlock } from './inserter/search-term';
import { toggleGlobalBlockInserter } from './inserter/toggle-golabl-block-inserter';
import { waitForInserterCloseAndContentFocus } from './inserter/wait-for-inserter-close-and-focus-content';
import { canvas } from './canvas';
import { clickOnCloseModalButton } from './click-on-close-modal-button';
import { clickOnMoreMenuItem } from './click-on-more-menu-item';
import { getEditedPostContent } from './get-edited-post-content';
import { wpDataSelect } from './wp-data-select';

class PageUtils {
	browser: Browser;
	page: Page;
	context: BrowserContext;

	constructor( page: Page ) {
		this.page = page;
		this.context = page.context();
		this.browser = this.context.browser()!;
	}

	clickBlockToolbarButton = clickBlockToolbarButton;
	createNewPost = createNewPost;
	getCurrentUser = getCurrentUser;
	getPageError = getPageError;
	isCurrentURL = isCurrentURL;
	loginUser = loginUser;
	showBlockToolbar = showBlockToolbar;
	switchUserToAdmin = switchUserToAdmin;
	switchUserToTest = switchUserToTest;
	visitAdminPage = visitAdminPage;
	focusSelectedBlock = focusSelectedBlock;
	insertBlock = insertBlock;
	isGlobalInserterOpen = isGlobalInserterOpen;
	openGlobalBlockInserter = openGlobalBlockInserter;
	searchForBlock = searchForBlock;
	toggleGlobalBlockInserter = toggleGlobalBlockInserter;
	waitForInserterCloseAndContentFocus = waitForInserterCloseAndContentFocus;
	canvas = canvas;
	clickOnCloseModalButton = clickOnCloseModalButton;
	clickOnMoreMenuItem = clickOnMoreMenuItem;
	getEditedPostContent = getEditedPostContent;
	wpDataSelect = wpDataSelect;
}

export { PageUtils };
