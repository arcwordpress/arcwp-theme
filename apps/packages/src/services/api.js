import axios from 'axios';

/**
 * Get the WordPress REST API base URL
 */
const getApiBaseUrl = () => {
  if (window.arcwpPackages && window.arcwpPackages.apiUrl) {
    return window.arcwpPackages.apiUrl;
  }
  if (window.wpApiSettings && window.wpApiSettings.root) {
    return window.wpApiSettings.root;
  }
  return '/wp-json/';
};

/**
 * Get the WordPress REST API nonce for authentication
 */
const getNonce = () => {
  if (window.arcwpPackages && window.arcwpPackages.nonce) {
    return window.arcwpPackages.nonce;
  }
  if (window.wpApiSettings && window.wpApiSettings.nonce) {
    return window.wpApiSettings.nonce;
  }
  return null;
};

/**
 * Create axios instance with default config
 */
const apiClient = axios.create({
  baseURL: getApiBaseUrl(),
  headers: {
    'Content-Type': 'application/json',
  },
});

// Add nonce to requests if available
apiClient.interceptors.request.use((config) => {
  const nonce = getNonce();
  if (nonce) {
    config.headers['X-WP-Nonce'] = nonce;
  }
  return config;
});

/**
 * Fetch all packages
 * @param {Object} params - Query parameters (type filter, search, etc.)
 * @returns {Promise} Promise resolving to array of packages
 */
export const fetchPackages = async (params = {}) => {
  try {
    const response = await apiClient.get('gateway/v1/packages', { params });
    return response.data.data?.items || response.data.items || response.data || [];
  } catch (error) {
    console.error('Error fetching packages:', error);
    throw error;
  }
};

/**
 * Fetch a single package by slug
 * @param {string} slug - Package slug
 * @returns {Promise} Promise resolving to package object
 */
export const fetchPackageBySlug = async (slug) => {
  try {
    // First fetch all packages and find by slug
    const packages = await fetchPackages();
    const pkg = packages.find(p => p.slug === slug);

    if (!pkg) {
      throw new Error(`Package with slug "${slug}" not found`);
    }

    return pkg;
  } catch (error) {
    console.error(`Error fetching package ${slug}:`, error);
    throw error;
  }
};

/**
 * Fetch a single package by ID
 * @param {number} id - Package ID
 * @returns {Promise} Promise resolving to package object
 */
export const fetchPackage = async (id) => {
  try {
    const response = await apiClient.get(`gateway/v1/packages/${id}`);
    return response.data.data || response.data;
  } catch (error) {
    console.error(`Error fetching package ${id}:`, error);
    throw error;
  }
};

export default apiClient;
