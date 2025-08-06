<?php

trait TDynamicTitleController
{
	private $pageTitle;

	public function setPageTitle(string $title): void
	{
		$this->pageTitle = $title;
	}

	public function getPageTitle(): string
	{
		return $this->pageTitle;;
	}
}
