<?php



/**
 * This class defines the structure of the 'Inscrit_Sub' table.
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
class CommonInscritSubTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonInscritSubTableMap';

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
        $this->setName('Inscrit_Sub');
        $this->setPhpName('CommonInscritSub');
        $this->setClassname('CommonInscritSub');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('entreprise_id', 'EntrepriseId', 'INTEGER', true, null, 0);
        $this->addColumn('login', 'Login', 'VARCHAR', false, 50, null);
        $this->addColumn('mdp', 'Mdp', 'VARCHAR', false, 40, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 30, '');
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', true, 30, '');
        $this->addColumn('email', 'Email', 'VARCHAR', true, 100, '');
        $this->addColumn('profil', 'Profil', 'INTEGER', true, 1, 1);
        $this->addForeignKey('id_inscrit', 'IdInscrit', 'INTEGER', 'Inscrit', 'id', true, null, 0);
        $this->addColumn('date_creation', 'DateCreation', 'VARCHAR', true, 20, '');
        $this->addColumn('date_modification', 'DateModification', 'VARCHAR', true, 20, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonInscrit', 'CommonInscrit', RelationMap::MANY_TO_ONE, array('id_inscrit' => 'id', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonInscritSubTableMap
