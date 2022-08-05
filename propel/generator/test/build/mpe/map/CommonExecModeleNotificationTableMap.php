<?php



/**
 * This class defines the structure of the 'exec_modele_notification' table.
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
class CommonExecModeleNotificationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonExecModeleNotificationTableMap';

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
        $this->setName('exec_modele_notification');
        $this->setPhpName('CommonExecModeleNotification');
        $this->setClassname('CommonExecModeleNotification');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 250, null);
        $this->addColumn('param', 'Param', 'CLOB', true, null, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 20, null);
        $this->addColumn('en_copie', 'EnCopie', 'VARCHAR', true, 20, null);
        $this->addColumn('destinataire', 'Destinataire', 'VARCHAR', true, 20, null);
        $this->addColumn('objet', 'Objet', 'VARCHAR', true, 250, null);
        $this->addColumn('actif', 'Actif', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonExecModeleNotificationTableMap
