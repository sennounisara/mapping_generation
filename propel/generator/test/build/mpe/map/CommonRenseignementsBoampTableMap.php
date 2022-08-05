<?php



/**
 * This class defines the structure of the 'renseignements_boamp' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonRenseignementsBoampTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonRenseignementsBoampTableMap';

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
        $this->setName('renseignements_boamp');
        $this->setPhpName('CommonRenseignementsBoamp');
        $this->setClassname('CommonRenseignementsBoamp');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 50, null);
        $this->addPrimaryKey('acronymeOrg', 'Acronymeorg', 'VARCHAR', true, 30, null);
        $this->addColumn('id_type', 'IdType', 'INTEGER', true, 50, null);
        $this->addColumn('id_compte', 'IdCompte', 'INTEGER', true, 50, null);
        $this->addColumn('correspondant', 'Correspondant', 'VARCHAR', false, 200, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', false, 200, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', false, 200, null);
        $this->addColumn('cp', 'Cp', 'VARCHAR', false, 200, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', false, 200, null);
        $this->addColumn('pays', 'Pays', 'VARCHAR', false, 200, null);
        $this->addColumn('telephone', 'Telephone', 'VARCHAR', false, 200, null);
        $this->addColumn('poste', 'Poste', 'VARCHAR', false, 200, null);
        $this->addColumn('fax', 'Fax', 'VARCHAR', false, 200, null);
        $this->addColumn('mail', 'Mail', 'VARCHAR', false, 200, null);
        $this->addColumn('url', 'Url', 'LONGVARCHAR', false, null, null);
        $this->addColumn('organe_charge_procedure', 'OrganeChargeProcedure', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonRenseignementsBoampTableMap
