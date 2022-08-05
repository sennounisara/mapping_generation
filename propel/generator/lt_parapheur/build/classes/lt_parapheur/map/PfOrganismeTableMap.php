<?php



/**
 * This class defines the structure of the 'pf_organisme' table.
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
class PfOrganismeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.PfOrganismeTableMap';

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
        $this->setName('pf_organisme');
        $this->setPhpName('PfOrganisme');
        $this->setClassname('PfOrganisme');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_ORGANISME', 'IdOrganisme', 'INTEGER', true, null, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', false, null, null);
        $this->addColumn('DENOMINATION_FR', 'DenominationFr', 'VARCHAR', false, 255, null);
        $this->addColumn('DENOMINATION_AR', 'DenominationAr', 'VARCHAR', false, 255, null);
        $this->addColumn('URL_FORM_RECLAMATION', 'UrlFormReclamation', 'VARCHAR', false, 255, null);
        $this->addColumn('CATEGORIE', 'Categorie', 'INTEGER', true, null, null);
        $this->addColumn('ID_REGION', 'IdRegion', 'INTEGER', false, null, null);
        $this->addColumn('ID_PROVINCE', 'IdProvince', 'INTEGER', false, null, null);
        $this->addColumn('ID_COMMUNE', 'IdCommune', 'INTEGER', false, null, null);
        $this->addColumn('MOTS_CLES_FR', 'MotsClesFr', 'VARCHAR', false, 1000, null);
        $this->addColumn('MOTS_CLES_AR', 'MotsClesAr', 'VARCHAR', false, 1000, null);
        $this->addColumn('TELEPHONES', 'Telephones', 'VARCHAR', false, 255, null);
        $this->addColumn('HORAIRES_AR', 'HorairesAr', 'VARCHAR', false, 500, null);
        $this->addColumn('HORAIRES_FR', 'HorairesFr', 'VARCHAR', false, 500, null);
        $this->addColumn('ACTIF', 'Actif', 'CHAR', true, null, '0');
        $this->getColumn('ACTIF', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('ORDRE', 'Ordre', 'INTEGER', true, null, 0);
        $this->addColumn('DATE_MODIFICATION', 'DateModification', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PfOrganismeTableMap
