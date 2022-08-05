<?php



/**
 * This class defines the structure of the 'theme' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class ThemeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.ThemeTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('theme');
        $this->setPhpName('Theme');
        $this->setClassname('Theme');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_THEME', 'IdTheme', 'INTEGER', true, null, null);
        $this->addColumn('LIBELLE_THEME_FR', 'LibelleThemeFr', 'VARCHAR', false, 255, null);
        $this->addColumn('LIBELLE_THEME_AR', 'LibelleThemeAr', 'VARCHAR', false, 255, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', true, null, null);
        $this->addColumn('VISIBLE_TIERS', 'VisibleTiers', 'CHAR', true, null, null);
        $this->getColumn('VISIBLE_TIERS', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_MODIFICATION', 'DateModification', 'TIMESTAMP', false, null, null);
        $this->addColumn('TYPE_THEME', 'TypeTheme', 'INTEGER', false, 2, null);
        $this->addColumn('ID_CIRCUIT_VALIDATION', 'IdCircuitValidation', 'INTEGER', false, null, null);
        $this->addColumn('ENTITES_AUTORISEES', 'EntitesAutorisees', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CALCUL_ENTITES_AUTORISEES', 'CalculEntitesAutorisees', 'LONGVARCHAR', false, null, null);
        $this->addColumn('TYPE_DEMANDE', 'TypeDemande', 'INTEGER', false, null, null);
        $this->addColumn('ID_EXTERNE', 'IdExterne', 'INTEGER', false, null, null);
        $this->addColumn('AIDE_TEXT', 'AideText', 'LONGVARCHAR', false, null, null);
        $this->addColumn('DELAI', 'Delai', 'INTEGER', false, null, null);
        $this->addColumn('VISIBLE_DEMANDEUR', 'VisibleDemandeur', 'CHAR', true, null, '0');
        $this->getColumn('VISIBLE_DEMANDEUR', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TYPE_DELAI', 'TypeDelai', 'CHAR', true, null, '1');
        $this->getColumn('TYPE_DELAI', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ThemeTableMap
