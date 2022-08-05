<?php



/**
 * This class defines the structure of the 'Chorus_organisation_achat' table.
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
class CommonChorusOrganisationAchatTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonChorusOrganisationAchatTableMap';

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
        $this->setName('Chorus_organisation_achat');
        $this->setPhpName('CommonChorusOrganisationAchat');
        $this->setClassname('CommonChorusOrganisationAchat');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 20, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 10, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 250, '');
        $this->addColumn('code', 'Code', 'VARCHAR', true, 50, '');
        $this->addColumn('actif', 'Actif', 'INTEGER', true, null, 1);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonChorusOrganisationAchatTableMap
