<?php



/**
 * This class defines the structure of the 'backup_Commission' table.
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
class CommonBackupCommissionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonBackupCommissionTableMap';

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
        $this->setName('backup_Commission');
        $this->setPhpName('CommonBackupCommission');
        $this->setClassname('CommonBackupCommission');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('date', 'Date', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('lieu', 'Lieu', 'VARCHAR', true, 200, '');
        $this->addColumn('salle', 'Salle', 'VARCHAR', true, 100, '');
        $this->addColumn('type', 'Type', 'VARCHAR', true, 200, '');
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', false, 250, null);
        $this->addColumn('ordre_du_jour', 'OrdreDuJour', 'BLOB', false, null, null);
        $this->addColumn('invitations_zip', 'InvitationsZip', 'BLOB', false, null, null);
        $this->addColumn('status_cao', 'StatusCao', 'CHAR', true, 2, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonBackupCommissionTableMap
