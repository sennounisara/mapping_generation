<?php



/**
 * This class defines the structure of the 'DestinataireAnnonceJAL' table.
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
class CommonDestinataireAnnonceJALTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonDestinataireAnnonceJALTableMap';

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
        $this->setName('DestinataireAnnonceJAL');
        $this->setPhpName('CommonDestinataireAnnonceJAL');
        $this->setClassname('CommonDestinataireAnnonceJAL');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('idJAL', 'Idjal', 'INTEGER', true, null, 0);
        $this->addColumn('idAnnonceJAL', 'Idannoncejal', 'INTEGER', true, null, 0);
        $this->addColumn('date_envoi', 'DateEnvoi', 'VARCHAR', true, 14, '');
        $this->addColumn('date_pub', 'DatePub', 'VARCHAR', true, 14, '');
        $this->addColumn('statut', 'Statut', 'CHAR', true, null, '');
        $this->addColumn('accuse', 'Accuse', 'CHAR', true, null, '');
        $this->addColumn('id_echange', 'IdEchange', 'INTEGER', false, null, null);
        $this->addColumn('date_ar', 'DateAr', 'VARCHAR', false, 25, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDestinataireAnnonceJALTableMap
