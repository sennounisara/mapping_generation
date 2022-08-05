<?php



/**
 * This class defines the structure of the 'configuration_plateforme' table.
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
class ConfigurationPlateformeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.ConfigurationPlateformeTableMap';

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
        $this->setName('configuration_plateforme');
        $this->setPhpName('ConfigurationPlateforme');
        $this->setClassname('ConfigurationPlateforme');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('MODULE_DEMANDEUR_CONNU', 'ModuleDemandeurConnu', 'CHAR', true, null, '1');
        $this->getColumn('MODULE_DEMANDEUR_CONNU', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AFFICHAGE_ONGLET_FORMAT_DEMANDE', 'AffichageOngletFormatDemande', 'CHAR', true, null, '0');
        $this->getColumn('AFFICHAGE_ONGLET_FORMAT_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AFFICHAGE_POPOVER_FORMAT_DEMANDE', 'AffichagePopoverFormatDemande', 'CHAR', true, null, '0');
        $this->getColumn('AFFICHAGE_POPOVER_FORMAT_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AFFICHAGE_CRITERE_FORMAT_DEMANDE', 'AffichageCritereFormatDemande', 'CHAR', true, null, '0');
        $this->getColumn('AFFICHAGE_CRITERE_FORMAT_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AR_AGENT', 'ArAgent', 'CHAR', false, null, '0');
        $this->getColumn('AR_AGENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('AFFICHAGE_SOURCE_DEMANDE', 'AffichageSourceDemande', 'CHAR', true, null, '0');
        $this->getColumn('AFFICHAGE_SOURCE_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('MODULE_RECHERCHE_THEME_DEMANDEUR', 'ModuleRechercheThemeDemandeur', 'CHAR', true, null, '0');
        $this->getColumn('MODULE_RECHERCHE_THEME_DEMANDEUR', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('VISIBLITIE_CONDITION_UTILISATION', 'VisiblitieConditionUtilisation', 'CHAR', false, null, '0');
        $this->getColumn('VISIBLITIE_CONDITION_UTILISATION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('CONDITION_UTILISATION_AR', 'ConditionUtilisationAr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CONDITION_UTILISATION_FR', 'ConditionUtilisationFr', 'LONGVARCHAR', false, null, null);
        $this->addColumn('VISIBILITE_TYPE_DEMANDE', 'VisibiliteTypeDemande', 'CHAR', true, null, null);
        $this->getColumn('VISIBILITE_TYPE_DEMANDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ConfigurationPlateformeTableMap
