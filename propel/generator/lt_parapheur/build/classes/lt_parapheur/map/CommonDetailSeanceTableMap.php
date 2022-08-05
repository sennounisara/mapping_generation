<?php



/**
 * This class defines the structure of the 'detail_seance' table.
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
class CommonDetailSeanceTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonDetailSeanceTableMap';

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
        $this->setName('detail_seance');
        $this->setPhpName('CommonDetailSeance');
        $this->setClassname('CommonDetailSeance');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('rapporteur_pv_jugement', 'RapporteurPvJugement', 'LONGVARCHAR', false, null, null);
        $this->addColumn('date_rendement_pv_jugement', 'DateRendementPvJugement', 'TIMESTAMP', false, null, null);
        $this->addColumn('id_seance', 'IdSeance', 'INTEGER', true, null, null);
        $this->addColumn('membre_examen_echantillon', 'MembreExamenEchantillon', 'LONGVARCHAR', false, null, null);
        $this->addColumn('membre_examen_dossier_technique', 'MembreExamenDossierTechnique', 'LONGVARCHAR', false, null, null);
        $this->addColumn('observation', 'Observation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('membre_examen_offre_technique', 'MembreExamenOffreTechnique', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDetailSeanceTableMap
