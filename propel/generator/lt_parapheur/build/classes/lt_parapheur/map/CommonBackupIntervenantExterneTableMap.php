<?php



/**
 * This class defines the structure of the 'backup_Intervenant_Externe' table.
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
class CommonBackupIntervenantExterneTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonBackupIntervenantExterneTableMap';

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
        $this->setName('backup_Intervenant_Externe');
        $this->setPhpName('CommonBackupIntervenantExterne');
        $this->setClassname('CommonBackupIntervenantExterne');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 30, '');
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', true, 30, '');
        $this->addColumn('organisation', 'Organisation', 'VARCHAR', true, 30, '');
        $this->addColumn('fonction', 'Fonction', 'VARCHAR', true, 200, '');
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', true, 255, '');
        $this->addColumn('code_postal', 'CodePostal', 'VARCHAR', true, 50, null);
        $this->addColumn('ville', 'Ville', 'VARCHAR', true, 255, null);
        $this->addColumn('mail', 'Mail', 'VARCHAR', true, 100, '');
        $this->addColumn('type_invitation', 'TypeInvitation', 'INTEGER', true, 1, 1);
        $this->addColumn('civilite', 'Civilite', 'VARCHAR', false, 255, '');
        $this->addColumn('type_voix', 'TypeVoix', 'VARCHAR', true, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonBackupIntervenantExterneTableMap
