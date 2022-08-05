<?php


/**
 * Base class that represents a query for the 'configuration_plateforme' table.
 *
 * 
 *
 * @method ConfigurationPlateformeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ConfigurationPlateformeQuery orderByModuleDemandeurConnu($order = Criteria::ASC) Order by the MODULE_DEMANDEUR_CONNU column
 * @method ConfigurationPlateformeQuery orderByAffichageOngletFormatDemande($order = Criteria::ASC) Order by the AFFICHAGE_ONGLET_FORMAT_DEMANDE column
 * @method ConfigurationPlateformeQuery orderByAffichagePopoverFormatDemande($order = Criteria::ASC) Order by the AFFICHAGE_POPOVER_FORMAT_DEMANDE column
 * @method ConfigurationPlateformeQuery orderByAffichageCritereFormatDemande($order = Criteria::ASC) Order by the AFFICHAGE_CRITERE_FORMAT_DEMANDE column
 * @method ConfigurationPlateformeQuery orderByArAgent($order = Criteria::ASC) Order by the AR_AGENT column
 * @method ConfigurationPlateformeQuery orderByAffichageSourceDemande($order = Criteria::ASC) Order by the AFFICHAGE_SOURCE_DEMANDE column
 * @method ConfigurationPlateformeQuery orderByModuleRechercheThemeDemandeur($order = Criteria::ASC) Order by the MODULE_RECHERCHE_THEME_DEMANDEUR column
 * @method ConfigurationPlateformeQuery orderByVisiblitieConditionUtilisation($order = Criteria::ASC) Order by the VISIBLITIE_CONDITION_UTILISATION column
 * @method ConfigurationPlateformeQuery orderByConditionUtilisationAr($order = Criteria::ASC) Order by the CONDITION_UTILISATION_AR column
 * @method ConfigurationPlateformeQuery orderByConditionUtilisationFr($order = Criteria::ASC) Order by the CONDITION_UTILISATION_FR column
 * @method ConfigurationPlateformeQuery orderByVisibiliteTypeDemande($order = Criteria::ASC) Order by the VISIBILITE_TYPE_DEMANDE column
 *
 * @method ConfigurationPlateformeQuery groupById() Group by the id column
 * @method ConfigurationPlateformeQuery groupByModuleDemandeurConnu() Group by the MODULE_DEMANDEUR_CONNU column
 * @method ConfigurationPlateformeQuery groupByAffichageOngletFormatDemande() Group by the AFFICHAGE_ONGLET_FORMAT_DEMANDE column
 * @method ConfigurationPlateformeQuery groupByAffichagePopoverFormatDemande() Group by the AFFICHAGE_POPOVER_FORMAT_DEMANDE column
 * @method ConfigurationPlateformeQuery groupByAffichageCritereFormatDemande() Group by the AFFICHAGE_CRITERE_FORMAT_DEMANDE column
 * @method ConfigurationPlateformeQuery groupByArAgent() Group by the AR_AGENT column
 * @method ConfigurationPlateformeQuery groupByAffichageSourceDemande() Group by the AFFICHAGE_SOURCE_DEMANDE column
 * @method ConfigurationPlateformeQuery groupByModuleRechercheThemeDemandeur() Group by the MODULE_RECHERCHE_THEME_DEMANDEUR column
 * @method ConfigurationPlateformeQuery groupByVisiblitieConditionUtilisation() Group by the VISIBLITIE_CONDITION_UTILISATION column
 * @method ConfigurationPlateformeQuery groupByConditionUtilisationAr() Group by the CONDITION_UTILISATION_AR column
 * @method ConfigurationPlateformeQuery groupByConditionUtilisationFr() Group by the CONDITION_UTILISATION_FR column
 * @method ConfigurationPlateformeQuery groupByVisibiliteTypeDemande() Group by the VISIBILITE_TYPE_DEMANDE column
 *
 * @method ConfigurationPlateformeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConfigurationPlateformeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConfigurationPlateformeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConfigurationPlateforme findOne(PropelPDO $con = null) Return the first ConfigurationPlateforme matching the query
 * @method ConfigurationPlateforme findOneOrCreate(PropelPDO $con = null) Return the first ConfigurationPlateforme matching the query, or a new ConfigurationPlateforme object populated from the query conditions when no match is found
 *
 * @method ConfigurationPlateforme findOneByModuleDemandeurConnu(string $MODULE_DEMANDEUR_CONNU) Return the first ConfigurationPlateforme filtered by the MODULE_DEMANDEUR_CONNU column
 * @method ConfigurationPlateforme findOneByAffichageOngletFormatDemande(string $AFFICHAGE_ONGLET_FORMAT_DEMANDE) Return the first ConfigurationPlateforme filtered by the AFFICHAGE_ONGLET_FORMAT_DEMANDE column
 * @method ConfigurationPlateforme findOneByAffichagePopoverFormatDemande(string $AFFICHAGE_POPOVER_FORMAT_DEMANDE) Return the first ConfigurationPlateforme filtered by the AFFICHAGE_POPOVER_FORMAT_DEMANDE column
 * @method ConfigurationPlateforme findOneByAffichageCritereFormatDemande(string $AFFICHAGE_CRITERE_FORMAT_DEMANDE) Return the first ConfigurationPlateforme filtered by the AFFICHAGE_CRITERE_FORMAT_DEMANDE column
 * @method ConfigurationPlateforme findOneByArAgent(string $AR_AGENT) Return the first ConfigurationPlateforme filtered by the AR_AGENT column
 * @method ConfigurationPlateforme findOneByAffichageSourceDemande(string $AFFICHAGE_SOURCE_DEMANDE) Return the first ConfigurationPlateforme filtered by the AFFICHAGE_SOURCE_DEMANDE column
 * @method ConfigurationPlateforme findOneByModuleRechercheThemeDemandeur(string $MODULE_RECHERCHE_THEME_DEMANDEUR) Return the first ConfigurationPlateforme filtered by the MODULE_RECHERCHE_THEME_DEMANDEUR column
 * @method ConfigurationPlateforme findOneByVisiblitieConditionUtilisation(string $VISIBLITIE_CONDITION_UTILISATION) Return the first ConfigurationPlateforme filtered by the VISIBLITIE_CONDITION_UTILISATION column
 * @method ConfigurationPlateforme findOneByConditionUtilisationAr(string $CONDITION_UTILISATION_AR) Return the first ConfigurationPlateforme filtered by the CONDITION_UTILISATION_AR column
 * @method ConfigurationPlateforme findOneByConditionUtilisationFr(string $CONDITION_UTILISATION_FR) Return the first ConfigurationPlateforme filtered by the CONDITION_UTILISATION_FR column
 * @method ConfigurationPlateforme findOneByVisibiliteTypeDemande(string $VISIBILITE_TYPE_DEMANDE) Return the first ConfigurationPlateforme filtered by the VISIBILITE_TYPE_DEMANDE column
 *
 * @method array findById(int $id) Return ConfigurationPlateforme objects filtered by the id column
 * @method array findByModuleDemandeurConnu(string $MODULE_DEMANDEUR_CONNU) Return ConfigurationPlateforme objects filtered by the MODULE_DEMANDEUR_CONNU column
 * @method array findByAffichageOngletFormatDemande(string $AFFICHAGE_ONGLET_FORMAT_DEMANDE) Return ConfigurationPlateforme objects filtered by the AFFICHAGE_ONGLET_FORMAT_DEMANDE column
 * @method array findByAffichagePopoverFormatDemande(string $AFFICHAGE_POPOVER_FORMAT_DEMANDE) Return ConfigurationPlateforme objects filtered by the AFFICHAGE_POPOVER_FORMAT_DEMANDE column
 * @method array findByAffichageCritereFormatDemande(string $AFFICHAGE_CRITERE_FORMAT_DEMANDE) Return ConfigurationPlateforme objects filtered by the AFFICHAGE_CRITERE_FORMAT_DEMANDE column
 * @method array findByArAgent(string $AR_AGENT) Return ConfigurationPlateforme objects filtered by the AR_AGENT column
 * @method array findByAffichageSourceDemande(string $AFFICHAGE_SOURCE_DEMANDE) Return ConfigurationPlateforme objects filtered by the AFFICHAGE_SOURCE_DEMANDE column
 * @method array findByModuleRechercheThemeDemandeur(string $MODULE_RECHERCHE_THEME_DEMANDEUR) Return ConfigurationPlateforme objects filtered by the MODULE_RECHERCHE_THEME_DEMANDEUR column
 * @method array findByVisiblitieConditionUtilisation(string $VISIBLITIE_CONDITION_UTILISATION) Return ConfigurationPlateforme objects filtered by the VISIBLITIE_CONDITION_UTILISATION column
 * @method array findByConditionUtilisationAr(string $CONDITION_UTILISATION_AR) Return ConfigurationPlateforme objects filtered by the CONDITION_UTILISATION_AR column
 * @method array findByConditionUtilisationFr(string $CONDITION_UTILISATION_FR) Return ConfigurationPlateforme objects filtered by the CONDITION_UTILISATION_FR column
 * @method array findByVisibiliteTypeDemande(string $VISIBILITE_TYPE_DEMANDE) Return ConfigurationPlateforme objects filtered by the VISIBILITE_TYPE_DEMANDE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseConfigurationPlateformeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConfigurationPlateformeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'ConfigurationPlateforme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConfigurationPlateformeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConfigurationPlateformeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConfigurationPlateformeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConfigurationPlateformeQuery) {
            return $criteria;
        }
        $query = new ConfigurationPlateformeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ConfigurationPlateforme|ConfigurationPlateforme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConfigurationPlateformePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ConfigurationPlateforme A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ConfigurationPlateforme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `MODULE_DEMANDEUR_CONNU`, `AFFICHAGE_ONGLET_FORMAT_DEMANDE`, `AFFICHAGE_POPOVER_FORMAT_DEMANDE`, `AFFICHAGE_CRITERE_FORMAT_DEMANDE`, `AR_AGENT`, `AFFICHAGE_SOURCE_DEMANDE`, `MODULE_RECHERCHE_THEME_DEMANDEUR`, `VISIBLITIE_CONDITION_UTILISATION`, `CONDITION_UTILISATION_AR`, `CONDITION_UTILISATION_FR`, `VISIBILITE_TYPE_DEMANDE` FROM `configuration_plateforme` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ConfigurationPlateforme();
            $obj->hydrate($row);
            ConfigurationPlateformePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return ConfigurationPlateforme|ConfigurationPlateforme[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ConfigurationPlateforme[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigurationPlateformePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigurationPlateformePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ConfigurationPlateformePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ConfigurationPlateformePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the MODULE_DEMANDEUR_CONNU column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleDemandeurConnu('fooValue');   // WHERE MODULE_DEMANDEUR_CONNU = 'fooValue'
     * $query->filterByModuleDemandeurConnu('%fooValue%'); // WHERE MODULE_DEMANDEUR_CONNU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moduleDemandeurConnu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByModuleDemandeurConnu($moduleDemandeurConnu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moduleDemandeurConnu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moduleDemandeurConnu)) {
                $moduleDemandeurConnu = str_replace('*', '%', $moduleDemandeurConnu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::MODULE_DEMANDEUR_CONNU, $moduleDemandeurConnu, $comparison);
    }

    /**
     * Filter the query on the AFFICHAGE_ONGLET_FORMAT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageOngletFormatDemande('fooValue');   // WHERE AFFICHAGE_ONGLET_FORMAT_DEMANDE = 'fooValue'
     * $query->filterByAffichageOngletFormatDemande('%fooValue%'); // WHERE AFFICHAGE_ONGLET_FORMAT_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageOngletFormatDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAffichageOngletFormatDemande($affichageOngletFormatDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageOngletFormatDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageOngletFormatDemande)) {
                $affichageOngletFormatDemande = str_replace('*', '%', $affichageOngletFormatDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::AFFICHAGE_ONGLET_FORMAT_DEMANDE, $affichageOngletFormatDemande, $comparison);
    }

    /**
     * Filter the query on the AFFICHAGE_POPOVER_FORMAT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichagePopoverFormatDemande('fooValue');   // WHERE AFFICHAGE_POPOVER_FORMAT_DEMANDE = 'fooValue'
     * $query->filterByAffichagePopoverFormatDemande('%fooValue%'); // WHERE AFFICHAGE_POPOVER_FORMAT_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichagePopoverFormatDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAffichagePopoverFormatDemande($affichagePopoverFormatDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichagePopoverFormatDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichagePopoverFormatDemande)) {
                $affichagePopoverFormatDemande = str_replace('*', '%', $affichagePopoverFormatDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::AFFICHAGE_POPOVER_FORMAT_DEMANDE, $affichagePopoverFormatDemande, $comparison);
    }

    /**
     * Filter the query on the AFFICHAGE_CRITERE_FORMAT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageCritereFormatDemande('fooValue');   // WHERE AFFICHAGE_CRITERE_FORMAT_DEMANDE = 'fooValue'
     * $query->filterByAffichageCritereFormatDemande('%fooValue%'); // WHERE AFFICHAGE_CRITERE_FORMAT_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageCritereFormatDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAffichageCritereFormatDemande($affichageCritereFormatDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageCritereFormatDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageCritereFormatDemande)) {
                $affichageCritereFormatDemande = str_replace('*', '%', $affichageCritereFormatDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::AFFICHAGE_CRITERE_FORMAT_DEMANDE, $affichageCritereFormatDemande, $comparison);
    }

    /**
     * Filter the query on the AR_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByArAgent('fooValue');   // WHERE AR_AGENT = 'fooValue'
     * $query->filterByArAgent('%fooValue%'); // WHERE AR_AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByArAgent($arAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $arAgent)) {
                $arAgent = str_replace('*', '%', $arAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::AR_AGENT, $arAgent, $comparison);
    }

    /**
     * Filter the query on the AFFICHAGE_SOURCE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByAffichageSourceDemande('fooValue');   // WHERE AFFICHAGE_SOURCE_DEMANDE = 'fooValue'
     * $query->filterByAffichageSourceDemande('%fooValue%'); // WHERE AFFICHAGE_SOURCE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $affichageSourceDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByAffichageSourceDemande($affichageSourceDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($affichageSourceDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $affichageSourceDemande)) {
                $affichageSourceDemande = str_replace('*', '%', $affichageSourceDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::AFFICHAGE_SOURCE_DEMANDE, $affichageSourceDemande, $comparison);
    }

    /**
     * Filter the query on the MODULE_RECHERCHE_THEME_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByModuleRechercheThemeDemandeur('fooValue');   // WHERE MODULE_RECHERCHE_THEME_DEMANDEUR = 'fooValue'
     * $query->filterByModuleRechercheThemeDemandeur('%fooValue%'); // WHERE MODULE_RECHERCHE_THEME_DEMANDEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moduleRechercheThemeDemandeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByModuleRechercheThemeDemandeur($moduleRechercheThemeDemandeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moduleRechercheThemeDemandeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moduleRechercheThemeDemandeur)) {
                $moduleRechercheThemeDemandeur = str_replace('*', '%', $moduleRechercheThemeDemandeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::MODULE_RECHERCHE_THEME_DEMANDEUR, $moduleRechercheThemeDemandeur, $comparison);
    }

    /**
     * Filter the query on the VISIBLITIE_CONDITION_UTILISATION column
     *
     * Example usage:
     * <code>
     * $query->filterByVisiblitieConditionUtilisation('fooValue');   // WHERE VISIBLITIE_CONDITION_UTILISATION = 'fooValue'
     * $query->filterByVisiblitieConditionUtilisation('%fooValue%'); // WHERE VISIBLITIE_CONDITION_UTILISATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visiblitieConditionUtilisation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByVisiblitieConditionUtilisation($visiblitieConditionUtilisation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visiblitieConditionUtilisation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visiblitieConditionUtilisation)) {
                $visiblitieConditionUtilisation = str_replace('*', '%', $visiblitieConditionUtilisation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::VISIBLITIE_CONDITION_UTILISATION, $visiblitieConditionUtilisation, $comparison);
    }

    /**
     * Filter the query on the CONDITION_UTILISATION_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByConditionUtilisationAr('fooValue');   // WHERE CONDITION_UTILISATION_AR = 'fooValue'
     * $query->filterByConditionUtilisationAr('%fooValue%'); // WHERE CONDITION_UTILISATION_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conditionUtilisationAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConditionUtilisationAr($conditionUtilisationAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conditionUtilisationAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conditionUtilisationAr)) {
                $conditionUtilisationAr = str_replace('*', '%', $conditionUtilisationAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::CONDITION_UTILISATION_AR, $conditionUtilisationAr, $comparison);
    }

    /**
     * Filter the query on the CONDITION_UTILISATION_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByConditionUtilisationFr('fooValue');   // WHERE CONDITION_UTILISATION_FR = 'fooValue'
     * $query->filterByConditionUtilisationFr('%fooValue%'); // WHERE CONDITION_UTILISATION_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conditionUtilisationFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByConditionUtilisationFr($conditionUtilisationFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conditionUtilisationFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conditionUtilisationFr)) {
                $conditionUtilisationFr = str_replace('*', '%', $conditionUtilisationFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::CONDITION_UTILISATION_FR, $conditionUtilisationFr, $comparison);
    }

    /**
     * Filter the query on the VISIBILITE_TYPE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibiliteTypeDemande('fooValue');   // WHERE VISIBILITE_TYPE_DEMANDE = 'fooValue'
     * $query->filterByVisibiliteTypeDemande('%fooValue%'); // WHERE VISIBILITE_TYPE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibiliteTypeDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function filterByVisibiliteTypeDemande($visibiliteTypeDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibiliteTypeDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibiliteTypeDemande)) {
                $visibiliteTypeDemande = str_replace('*', '%', $visibiliteTypeDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfigurationPlateformePeer::VISIBILITE_TYPE_DEMANDE, $visibiliteTypeDemande, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ConfigurationPlateforme $configurationPlateforme Object to remove from the list of results
     *
     * @return ConfigurationPlateformeQuery The current query, for fluid interface
     */
    public function prune($configurationPlateforme = null)
    {
        if ($configurationPlateforme) {
            $this->addUsingAlias(ConfigurationPlateformePeer::ID, $configurationPlateforme->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
